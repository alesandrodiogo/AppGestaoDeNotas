<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subsistema;

class SubsistemaController extends Controller
{
    public function index()
    {
        $subsistemas = Subsistema::all();
        return view('administracao.subsistema.listar', compact('subsistemas'));
    }

    public function create()
    {
        return view('administracao.subsistema.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Subsistema::create($request->all());
        return redirect()->route('administracao.subsistema.listar')
        ->with('success', 'Subsistema criado com sucesso.');
    }

    public function show(Subsistema $subsistema)
    {
        return view('subsistemas.show', compact('subsistema'));
    }

    public function edit(Subsistema $subsistema)
    {
        return view('administracao.subsistema.editar', compact('subsistema'));
    }

    public function update(Request $request, Subsistema $subsistema)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $subsistema->update($request->all());
        return redirect()->route('administracao.subsistema.listar')
        ->with('success', 'Subsistema atualizado com sucesso.');
    }

    public function destroy(Subsistema $subsistema)
    {
        $subsistema->delete();
        return redirect()->route('administracao.subsistema.listar')
        ->with('success', 'Subsistema excluído com sucesso.');
    }
}
