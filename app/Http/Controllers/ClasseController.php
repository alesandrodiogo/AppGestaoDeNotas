<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        return view('gestao.classe.listar', compact('classes'));
    }

    public function create()
    {
        return view('gestao.classe.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Classe::create($request->all());
        return redirect()->route('gestao.classe.listar')
        ->with('success', 'Classe criada com sucesso.');
    }

    public function show(Classe $classe)
    {
        return view('classes.show', compact('classe'));
    }

    public function edit(Classe $classe)
    {
        return view('gestao.classe.editar', compact('classe'));
    }

    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $classe->update($request->all());
        return redirect()->route('gestao.classe.listar')
        ->with('success', 'Classe atualizada com sucesso.');
    }

    public function destroy(Classe $classe)
    {
        $classe->delete();
        return redirect()->route('gestao.classe.listar')
        ->with('success', 'Classe excluída com sucesso.');
    }
}
