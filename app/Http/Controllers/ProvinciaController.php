<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;

class ProvinciaController extends Controller
{
    public function index()
    {
        $provincias = Provincia::all();
        return view('administracao.provincia.listar', compact('provincias'));
    }

    public function create()
    {
        return view('administracao.provincia.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Provincia::create($request->all());
        return redirect()->route('administracao.provincia.listar')
        ->with('success', 'Província criada com sucesso.');
    }

    public function show(Provincia $provincia)
    {
        return view('provincias.show', compact('provincia'));
    }

    public function edit(Provincia $provincia)
    {
        return view('administracao.provincia.editar', compact('provincia'));
    }

    public function update(Request $request, Provincia $provincia)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $provincia->update($request->all());
        return redirect()->route('administracao.provincia.listar')
        ->with('success', 'Província atualizada com sucesso.');
    }

    public function destroy(Provincia $provincia)
    {
        $provincia->delete();
        return redirect()->route('administracao.provincia.listar')
        ->with('success', 'Província excluída com sucesso.');
    }
}
