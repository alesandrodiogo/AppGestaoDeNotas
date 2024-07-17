<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Nota;
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
             'nome_completo' => 'required',
             'numero_estudante' => 'required',
             'nome_pai' => 'required',
             'nome_mae' => 'required',
             'telefone' => 'required',
             'turma_id' => 'required|exists:turmas,id',
             'sala_id' => 'required|exists:salas,id',
             'data_nascimento' => 'required|date',
             'morada' => 'required'
         ]);

         $aluno = new Aluno();
         $aluno->nome_completo = $request->nome_completo;
         $aluno->numero_estudante = $request->numero_estudante;
         $aluno->nome_pai = $request->nome_pai;
         $aluno->nome_mae = $request->nome_mae;
         $aluno->telefone = $request->telefone;
         $aluno->turma_id = $request->turma_id;
         $aluno->sala_id = $request->sala_id;
         $aluno->data_nascimento = $request->data_nascimento;
         $aluno->morada = $request->morada;
         $aluno->save();
 
         return redirect('/user_profile_aluno')
         ->with('success', 'Aluno criado com sucesso.');
    }

       // Exibir um aluno específico
       public function show($id)
       {

        $aluno = Aluno::with('notas')->findOrFail($id);

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
        'nome_completo' => 'required|string|max:255',
        'numero_estudante' => 'required|integer',
        'nome_pai' => 'required|string|max:255',
        'nome_mae' => 'required|string|max:255',
        'telefone' => 'required|string|max:15',
        'turma_id' => 'required|exists:turmas,id',
        'sala_id' => 'required|exists:salas,id',
        'data_nascimento' => 'required|date',
        'morada' => 'required|string|max:255',
    ]);

    $aluno = Aluno::findOrFail($id);
    $aluno->update($request->all());

    return redirect('/user_profile_aluno')
        ->with('success', 'Aluno atualizado com sucesso.');
}
        // Deletar um aluno específico
        public function destroy($id)
        {
            $aluno = Aluno::findOrFail($id);
            $aluno->delete();

         return redirect('/user_profile_aluno')
         ->with('success', 'Aluno deletado com sucesso.');
        }

}