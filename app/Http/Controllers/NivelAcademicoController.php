<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NivelAcademico;

class NivelAcademicoController extends Controller
{
    public function index()
    {
        $niveisAcademicos = NivelAcademico::all();
        return view('gestao.nivel.listar', compact('niveisAcademicos'));
    }

    public function create()
    {
        return view('gestao.nivel.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        NivelAcademico::create($request->all());
        return redirect()->route('gestao.nivel.listar')
        ->with('success', 'Nível Acadêmico criado com sucesso.');
    }

    public function show(NivelAcademico $nivelAcademico)
    {
        return view('niveis_academicos.show', compact('nivelAcademico'));
    }

    public function edit(NivelAcademico $nivelAcademico)
    {
        return view('gestao.nivel.editar', compact('nivelAcademico'));
    }

    public function update(Request $request, NivelAcademico $nivelAcademico)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $nivelAcademico->update($request->all());
        return redirect()->route('gestao.nivel.listar')
        ->with('success', 'Nível Acadêmico atualizado com sucesso.');
    }

    public function destroy(NivelAcademico $nivelAcademico)
    {
        $nivelAcademico->delete();
        return redirect()->route('gestao.nivel.listar')
        ->with('success', 'Nível Acadêmico excluído com sucesso.');
    }
}
