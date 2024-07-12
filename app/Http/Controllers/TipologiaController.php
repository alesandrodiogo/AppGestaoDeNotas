<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipologia;

class TipologiaController extends Controller
{
    public function index()
    {
        $tipologias = Tipologia::all();
        return view('administracao.tipologia.listar', compact('tipologias'));
    }

    public function create()
    {
        return view('administracao.tipologia.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Tipologia::create($request->all());
        return redirect()->route('administracao.tipologia.listar')
        ->with('success', 'Tipologia criada com sucesso.');
    }

    public function show(Tipologia $tipologia)
    {
        return view('tipologias.show', compact('tipologia'));
    }

    public function edit(Tipologia $tipologia)
    {
        return view('administracao.tipologia.editar', compact('tipologia'));
    }

    public function update(Request $request, Tipologia $tipologia)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $tipologia->update($request->all());
        return redirect()->route('administracao.tipologia.listar')
        ->with('success', 'Tipologia atualizada com sucesso.');
    }

    public function destroy(Tipologia $tipologia)
    {
        $tipologia->delete();
        return redirect()->route('administracao.tipologia.listar')
        ->with('success', 'Tipologia excluída com sucesso.');
    }
}
