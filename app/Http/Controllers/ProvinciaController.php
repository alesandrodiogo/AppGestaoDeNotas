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
        return redirect('/provincias')
        ->with('success', 'Província criada com sucesso.');
    }

    /*public function show(Provincia $provincia)
    {
        return view('provincias.show', compact('provincia'));
    }*/

    public function edit($id)
    {
        $provincia = Provincia::findOrFail($id);
        return view('administracao.provincia.editar', compact('provincia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $provincia = Provincia::findOrFail($id);
        $provincia->update($request->all());

        return redirect('/provincias')
            ->with('success', 'Provincia atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $provincia = Provincia::findOrFail($id);
        $provincia->delete();

        return redirect('/provincias')
            ->with('success', 'Provincia excluída com sucesso.');
    }
}
