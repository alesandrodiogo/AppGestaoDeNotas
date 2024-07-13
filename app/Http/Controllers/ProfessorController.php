<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('utilizadores.professor.listar', compact('professores'));
    }

    public function create()
    {
        return view('utilizadores.professor.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'nullable|string|max:15',
        ]);

        Professor::create($request->all());
        return redirect()->route('utilizadores.professor.listar')
        ->with('success', 'Professor criado com sucesso.');
    }

    public function show(Professor $professor)
    {
        return view('professores.show', compact('professor'));
    }

    public function edit(Professor $professor)
    {
        return view('utilizadores.professor.editar', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'nullable|string|max:15',
        ]);

        $professor->update($request->all());
        return redirect()->route('utilizadores.professor.listar')
        ->with('success', 'Professor atualizado com sucesso.');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('utilizadores.professor.listar')
        ->with('success', 'Professor excluído com sucesso.');
    }
}
