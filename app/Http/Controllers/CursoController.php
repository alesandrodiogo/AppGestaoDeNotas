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
        return redirect('/cursos')
        ->with('success', 'Curso criado com sucesso.');
    }

    /*public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }*/

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('gestao.cursos.editar', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update($request->all());

        return redirect('/cursos')
            ->with('success', 'Curso atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect('/cursos')
            ->with('success', 'Curso excluído com sucesso.');
    }
}
