<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\Subsistema;
use App\Models\Municipio;
use App\Models\Tipologia;
use App\Models\Provincia;

class EscolaController extends Controller
{
    public function index()
    {
        // $escolas = Escola::all(); ou a funcao de baixo
        $escolas = Escola::with(['subsistema', 'tipologia', 'municipio', 'provincia'])->get();
        return view('administracao.escola.listar', compact('escolas'));
    }

    public function create()
    {
        $subsistemas = Subsistema::all();
        $tipologias = Tipologia::all();
        $municipios = Municipio::all();
        $provincias = Provincia::all();
        return view('administracao.escola.adicionar', compact('subsistemas', 'tipologias', 'municipios', 'provincias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'director' => 'required',
            'subsistema_id' => 'required|exists:subsistemas,id',
            'tipologia_id' => 'required|exists:tipologias,id',
            'municipio_id' => 'required|exists:municipios,id',
            'provincia_id' => 'required|exists:provincias,id',
        ]);

        Escola::create($request->all());

        return redirect('/escolas')
            ->with('success', 'Escola criada com sucesso.');
    }

    /*public function show($id)
    {
        $escola = Escola::with(['subsistema', 'tipologia', 'municipio', 'provincia'])
        ->findOrFail($id);
        return view('escolas.show', compact('escola'));
    }*/

    public function edit($id)
    {
        $escola = Escola::findOrFail($id);
        $subsistemas = Subsistema::all();
        $tipologias = Tipologia::all();
        $municipios = Municipio::all();
        $provincias = Provincia::all();
        return view('administracao.escola.editar', compact('escola', 'subsistemas', 'tipologias', 'municipios', 'provincias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'director' => 'required',
            'nif' => 'required',
            'subsistema_id' => 'required|exists:subsistemas,id',
            'tipologia_id' => 'required|exists:tipologias,id',
            'municipio_id' => 'required|exists:municipios,id',
            'provincia_id' => 'required|exists:provincias,id',
        ]);

        $escola = Escola::findOrFail($id);
        $escola->update($request->all());

        return redirect('/escolas')
            ->with('success', 'Escola atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $escola = Escola::findOrFail($id);
        $escola->delete();

        return redirect('/escolas')
            ->with('success', 'Escola excluída com sucesso.');
    }
}
