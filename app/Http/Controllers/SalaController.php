<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return view('gestao.sala.listar', compact('salas'));
    }

    public function create()
    {
        return view('gestao.sala.adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Sala::create($request->all());

        return redirect('/salas')
        ->with('success', 'Sala criada com sucesso.');
    }

    /*public function show(Sala $sala)
    {
        return view('salas.show', compact('sala'));
    }*/

    public function edit($id)
    {
        $sala = Sala::findOrFail($id);
        return view('gestao.sala.editar', compact('sala'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $sala = Sala::findOrFail($id);
        $sala->update($request->all());

        return redirect('/salas')
            ->with('success', 'Sala atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $sala = Sala::findOrFail($id);
        $sala->delete();

        return redirect('/salas')
            ->with('success', 'Sala excluída com sucesso.');
    }
}
