<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnoLectivo;

class AnoLectivoController extends Controller
{
    public function index()
    {
        $anoLectivos = AnoLectivo::all();
        return view('gestao.anolectivo.listar', compact('anoLectivos'));
    }

    public function create()
    {
        return view('gestao.anolectivo.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        AnoLectivo::create($request->all());
        return redirect('/ano_lectivo')
        ->with('success', 'Ano Lectivo criado com sucesso.');
    }

    /*public function show(AnoLectivo $anoLectivo)
    {
        return view('anoLectivos.show', compact('anoLectivo'));
    }*/

    public function edit($id)
    {
        $anoLectivo = AnoLectivo::findOrFail($id);
    return view('gestao.anolectivo.editar', compact('anoLectivo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);
    
        $anoLectivo = AnoLectivo::findOrFail($id);
        $anoLectivo->update($request->all());
    
        return redirect('/ano_lectivo')
            ->with('success', 'Ano Lectivo atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $anolectivo = AnoLectivo::findOrFail($id);
        $anolectivo->delete();

        return redirect('/ano_lectivo')
            ->with('success', 'Ano lectivo deletado com sucesso.');
    }

}
