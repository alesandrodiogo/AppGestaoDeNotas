<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return view('sala.sala.listar', compact('salas'));
    }

    public function create()
    {
        return view('sala.sala.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Sala::create($request->all());
        return redirect()->route('sala.sala.listar')
        ->with('success', 'Sala criada com sucesso.');
    }

    public function show(Sala $sala)
    {
        return view('salas.show', compact('sala'));
    }

    public function edit(Sala $sala)
    {
        return view('sala.sala.editar', compact('sala'));
    }

    public function update(Request $request, Sala $sala)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $sala->update($request->all());
        return redirect()->route('sala.sala.listar')
        ->with('success', 'Sala atualizada com sucesso.');
    }

    public function destroy(Sala $sala)
    {
        $sala->delete();
        return redirect()->route('sala.sala.listar')
        ->with('success', 'Sala excluída com sucesso.');
    }
}
