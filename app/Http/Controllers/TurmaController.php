<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::all();
        return view('gestao.turma.listar', compact('turmas'));
    }

    public function create()
    {
        return view('gestao.turma.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Turma::create($request->all());
        return redirect()->route('gestao.turma.listar')
        ->with('success', 'Turma criada com sucesso.');
    }

    public function show(Turma $turma)
    {
        return view('turmas.show', compact('turma'));
    }

    public function edit(Turma $turma)
    {
        return view('gestao.turma.editar', compact('turma'));
    }

    public function update(Request $request, Turma $turma)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $turma->update($request->all());
        return redirect()->route('gestao.turma.listar')
        ->with('success', 'Turma atualizada com sucesso.');
    }

    public function destroy(Turma $turma)
    {
        $turma->delete();
        return redirect()->route('gestao.turma.listar')
        ->with('success', 'Turma excluída com sucesso.');
    }
}
