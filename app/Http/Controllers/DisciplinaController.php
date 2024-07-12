<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('gestao.disciplina.listar', compact('disciplinas'));
    }

    public function create()
    {
        return view('gestao.disciplina.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Disciplina::create($request->all());
        return redirect()->route('gestao.disciplina.listar')
        ->with('success', 'Disciplina criada com sucesso.');
    }

    public function show(Disciplina $disciplina)
    {
        return view('disciplinas.show', compact('disciplina'));
    }

    public function edit(Disciplina $disciplina)
    {
        return view('gestao.disciplina.editar', compact('disciplina'));
    }

    public function update(Request $request, Disciplina $disciplina)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $disciplina->update($request->all());
        return redirect()->route('gestao.disciplina.listar')
        ->with('success', 'Disciplina atualizada com sucesso.');
    }

    public function destroy(Disciplina $disciplina)
    {
        $disciplina->delete();
        return redirect()->route('gestao.disciplina.listar')
        ->with('success', 'Disciplina excluída com sucesso.');
    }
}
