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
        return redirect('/turmas')
        ->with('success', 'Turma criada com sucesso.');
    }

    /*public function show(Turma $turma)
    {
        return view('turmas.show', compact('turma'));
    }*/

    public function edit($id)
    {
        $turma = Turma::findOrFail($id);
        return view('gestao.turma.editar', compact('turma'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nome' => 'required|string|max:255',
    ]);

    $turma = Turma::findOrFail($id);
    $turma->update($request->all());

    return redirect('/turmas')
        ->with('success', 'Turma atualizada com sucesso.');
}

    public function destroy($id)
    {
    $turma = Turma::findOrFail($id);
    $turma->delete();

    return redirect('/turmas')
        ->with('success', 'Turma excluída com sucesso.');
    }
}
