<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('gestao.cursos.listar', compact('cursos'));
    }

    public function create()
    {
        return view('gestao.cursos.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Curso::create($request->all());
        return redirect()->route('gestao.cursos.listar')
        ->with('success', 'Curso criado com sucesso.');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('gestao.cursos.editar', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $curso->update($request->all());
        return redirect()->route('gestao.cursos.listar')
        ->with('success', 'Curso atualizado com sucesso.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('gestao.cursos.listar')
        ->with('success', 'Curso excluído com sucesso.');
    }
}
