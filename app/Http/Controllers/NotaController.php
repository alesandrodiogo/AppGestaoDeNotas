<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Models\Aluno;
use App\Models\AnoLectivo;
use App\Models\Disciplina;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::with(['aluno', 'anoLectivo', 'disciplina'])->get();

        return view('administracao.notas.listar', compact('notas'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        $anosLectivos = AnoLectivo::all();
        $disciplinas = Disciplina::all();

        return view('administracao.notas.adicionar',
         compact('alunos', 'anosLectivos', 'disciplinas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'anolectivo_id' => 'required|exists:anolectivos,id',
            'disciplina_id' => 'required|exists:disciplinas,id',
            'mt1' => 'required|numeric',
            'mt2' => 'required|numeric',
            'mt3' => 'required|numeric',
            'mac' => 'required|numeric',
            'npp' => 'required|numeric',
            'npt' => 'required|numeric',
        ]);

        $nota = new Nota();
        $nota->aluno_id = $request->aluno_id;
        $nota->anolectivo_id = $request->anolectivo_id;
        $nota->disciplina_id = $request->disciplina_id;
        $nota->mt1 = $request->mt1;
        $nota->mt2 = $request->mt2;
        $nota->mt3 = $request->mt3;
        $nota->mac = $request->mac;
        $nota->npp = $request->npp;
        $nota->npt = $request->npt;
        $nota->save(); // A coluna mfd e mt será atualizada automaticamente

        return redirect()->route('administracao.notas.listar')
        ->with('success', 'Nota criada com sucesso.');
    }

    public function edit($id)
    {
        $nota = Nota::findOrFail($id);
        $alunos = Aluno::all();
        $anosLectivos = AnoLectivo::all();
        $disciplinas = Disciplina::all();

        return view('notas.edit', compact('nota', 'alunos', 'anosLectivos', 'disciplinas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'anolectivo_id' => 'required|exists:anolectivos,id',
            'disciplina_id' => 'required|exists:disciplinas,id',
            'mt1' => 'required|numeric',
            'mt2' => 'required|numeric',
            'mt3' => 'required|numeric',
            'mac' => 'required|numeric',
            'npp' => 'required|numeric',
            'npt' => 'required|numeric',
        ]);

        $nota = Nota::findOrFail($id);
        $nota->aluno_id = $request->aluno_id;
        $nota->anolectivo_id = $request->anolectivo_id;
        $nota->disciplina_id = $request->disciplina_id;
        $nota->mt1 = $request->mt1;
        $nota->mt2 = $request->mt2;
        $nota->mt3 = $request->mt3;
        $nota->mac = $request->mac;
        $nota->npp = $request->npp;
        $nota->npt = $request->npt;
        $nota->save(); // A coluna mfd e mt será atualizada automaticamente

        return redirect()->route('administracao.notas.listar')
        ->with('success', 'Nota atualizada com sucesso.');
    }
 
}    
