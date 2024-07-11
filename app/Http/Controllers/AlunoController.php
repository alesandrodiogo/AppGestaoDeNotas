<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Sala;
use App\Models\Turma;

class AlunoController extends Controller
{
    // Exibir uma lista de alunos
    public function index()
    {
        $alunos = Aluno::with(['turma', 'sala'])->get();
        return view('utilizadores.aluno.listar', compact('alunos'));
    }

    // Mostrar o formulário de criação
    public function create()
    {
        $turmas = Turma::all();
        $salas = Sala::all();
        return view('utilizadores.aluno.adicionar', compact('turmas', 'salas'));
    }

     // Cadastrar um novo aluno
     public function store(Request $request)
     {
         $request->validate([
             'nome' => 'required',
             'numero' => 'required',
             'nome_pai' => 'required',
             'nome_mae' => 'required',
             'telefone' => 'required',
             'turma_id' => 'required|exists:turmas,id',
             'sala_id' => 'required|exists:salas,id',
             'data_nascimento' => 'required',
             'morada' => 'required'
         ]);

         $aluno = new Aluno();
         $aluno->nome = $request->nome;
         $aluno->numero = $request->numero;
         $aluno->nome_pai = $request->nome_pai;
         $aluno->nome_mae = $request->nome_mae;
         $aluno->telefone = $request->telefone;
         $aluno->turma_id = $request->turma_id;
         $aluno->sala_id = $request->sala_id;
         $aluno->save();
 
         return redirect()->route('utilizadores.aluno.listar')
         ->with('success', 'Aluno criado com sucesso.');
    }

       // Exibir um aluno específico
       public function show($id)
       {
           $aluno = Aluno::with(['turma', 'sala'])->findOrFail($id);
           return view('utilizadores.aluno.veraluno', compact('aluno'));
       }

       // Mostrar o formulário de edição
        public function edit($id)
        {
        $aluno = Aluno::findOrFail($id);
        $turmas = Turma::all();
        $salas = Sala::all();
        return view('utilizadores.aluno.editar', compact('aluno', 'turmas', 'salas'));
        }

        // Atualizar um aluno específico
        public function update(Request $request, $id)
         {
             $request->validate([
            'nome' => 'required',
            'numero' => 'required',
            'nome_pai' => 'required',
            'nome_mae' => 'required',
            'telefone' => 'required',
            'turma_id' => 'required|exists:turmas,id',
            'sala_id' => 'required|exists:salas,id',
            'data_nascimento' => 'required',
            'morada' => 'required'
         ]);

        $aluno = Aluno::findOrFail($id);
        $aluno->nome = $request->nome;
         $aluno->numero = $request->numero;
         $aluno->nome_pai = $request->nome_pai;
         $aluno->nome_mae = $request->nome_mae;
         $aluno->telefone = $request->telefone;
         $aluno->turma_id = $request->turma_id;
         $aluno->sala_id = $request->sala_id;
         $aluno->save();

        return redirect()->route('utilizadores.aluno.listar')
        ->with('success', 'Aluno atualizado com sucesso.');
    }
        // Deletar um aluno específico
        public function destroy($id)
        {
            $aluno = Aluno::findOrFail($id);
            $aluno->delete();

         return redirect()->route('utilizadores.aluno.listar')
         ->with('success', 'Aluno deletado com sucesso.');
        }

}