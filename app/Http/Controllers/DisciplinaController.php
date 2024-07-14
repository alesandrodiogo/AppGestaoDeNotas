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
        return redirect('/disciplinas')
        ->with('success', 'Disciplina criada com sucesso.');
    }

    /*public function show(Disciplina $disciplina)
    {
        return view('disciplinas.show', compact('disciplina'));
    }*/

    public function edit($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        return view('gestao.disciplina.editar', compact('disciplina'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($request->all());

        return redirect('/disciplinas')
            ->with('success', 'Disciplina atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();

        return redirect('/disciplinas')
            ->with('success', 'Disciplina excluída com sucesso.');
    }
}
