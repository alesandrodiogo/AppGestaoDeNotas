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
        return redirect('/subsistemas')
        ->with('success', 'Subsistema criado com sucesso.');
    }

    /*public function show(Subsistema $subsistema)
    {
        return view('subsistemas.show', compact('subsistema'));
    }*/

    public function edit($id)
    {
        $subsistema = Subsistema::findOrFail($id);
        return view('administracao.subsistema.editar', compact('subsistema'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $subsistema = Subsistema::findOrFail($id);
        $subsistema->update($request->all());

        return redirect('/subsistemas')
            ->with('success', 'Subsistema atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $subsistema = Subsistema::findOrFail($id);
        $subsistema->delete();

        return redirect('/subsistemas')
            ->with('success', 'Subsistema excluído com sucesso.');
    }
}
