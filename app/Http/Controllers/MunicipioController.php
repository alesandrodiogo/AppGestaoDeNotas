<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::all();
        return view('administracao.municipio.listar', compact('municipios'));
    }

    public function create()
    {
        return view('administracao.municipio.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Municipio::create($request->all());
        return redirect('/municipios')
        ->with('success', 'Município criado com sucesso.');
    }

    /*public function show(Municipio $municipio)
    {
        return view('municipios.show', compact('municipio'));
    }*/

    public function edit($id)
    {
        $municipio = Municipio::findOrFail($id);
        return view('administracao.municipio.editar', compact('municipio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $municipio = Municipio::findOrFail($id);
        $municipio->update($request->all());

        return redirect('/municipios')
            ->with('success', 'Município atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->delete();

        return redirect('/municipios')
            ->with('success', 'Município excluído com sucesso.');
    }
}
