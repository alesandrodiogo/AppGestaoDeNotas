<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

// ROTAS DA GESTAO

Route::get('/gestao', function(){
    return view('gestao.index');
});

Route::get('/user_profile_aluno', [AlunoController::class, 'index'])
->name('utilizadores.aluno.listar');

Route::get('/user_profile_aluno/add', [AlunoController::class, 'create']);

Route::get('/user_profile_aluno/edit', [AlunoController::class, 'edit']);

Route::get('/user_profile_aluno/ver', function(){
    return view('utilizadores.aluno.veraluno');
});

Route::get('/user_profile_prof', function(){
    return view('utilizadores.professor.listar');
});

Route::get('/user_profile_prof/add', function(){
    return view('utilizadores.professor.adicionar');
});

Route::get('/user_profile_prof/edit', function(){
    return view('utilizadores.professor.editar');
});

Route::get('/utilizadores', function(){
    return view('utilizadores.index');
});

Route::get('/classes', function(){
    return view('gestao.classe.listar');
});

Route::get('/classe/add', function(){
    return view('gestao.classe.adicionar');
});

Route::get('/classe/edit', function(){
    return view('gestao.classe.editar');
});

Route::get('/cursos', function(){
    return view('gestao.cursos.listar');
});

Route::get('/curso/add', function(){
    return view('gestao.cursos.adicionar');
});

Route::get('/curso/edit', function(){
    return view('gestao.cursos.editar');
});

Route::get('/disciplinas', function(){
    return view('gestao.disciplina.listar');
});

Route::get('/disciplina/add', function(){
    return view('gestao.disciplina.adicionar');
});

Route::get('/disciplina/edit', function(){
    return view('gestao.disciplina.editar');
});

Route::get('/epocas', function(){
    return view('gestao.epoca.listar');
});

Route::get('/epoca/add', function(){
    return view('gestao.epoca.adicionar');
});

Route::get('/epoca/edit', function(){
    return view('gestao.epoca.editar');
});

Route::get('/nivel_academico', function(){
    return view('gestao.nivel.listar');
});

Route::get('/nivel_academico/add', function(){
    return view('gestao.nivel.adicionar');
});

Route::get('/nivel_academico/edit', function(){
    return view('gestao.nivel.editar');
});

Route::get('/salas', function(){
    return view('gestao.sala.listar');
});

Route::get('/sala/add', function(){
    return view('gestao.sala.adicionar');
});

Route::get('/sala/edit', function(){
    return view('gestao.sala.editar');
});

Route::get('/turmas', function(){
    return view('gestao.turma.listar');
});

Route::get('/turma/add', function(){
    return view('gestao.turma.adicionar');
});

Route::get('/turma/edit', function(){
    return view('gestao.turma.editar');
});

Route::get('/turnos', function(){
    return view('gestao.turno.listar');
});

Route::get('/turno/add', function(){
    return view('gestao.turno.adicionar');
});

Route::get('/turno/edit', function(){
    return view('gestao.turno.editar');
});

Route::get('/ano_lectivo', function(){
    return view('gestao.anolectivo.listar');
});

Route::get('/ano_lectivo/add', function(){
    return view('gestao.anolectivo.adicionar');
});

Route::get('/ano_lectivo/edit', function(){
    return view('gestao.anolectivo.editar');
});

//FIM DAS ROTAS DA GESTAO

Route::get('/administracao', function(){
    return view('administracao.index');
});

Route::get('/escolas', function(){
    return view('administracao.escola.listar');
});

Route::get('/escola/add', function(){
    return view('administracao.escola.adicionar');
});

Route::get('/escola/edit', function(){
    return view('administracao.escola.editar');
});

Route::get('/provincias', function(){
    return view('administracao.provincia.listar');
});

Route::get('/provincias/add', function(){
    return view('administracao.provincia.adicionar');
});

Route::get('/provincias/edit', function(){
    return view('administracao.provincia.editar');
});

Route::get('/municipios', function(){
    return view('administracao.municipio.listar');
});

Route::get('/municipios/add', function(){
    return view('administracao.municipio.adicionar');
});

Route::get('/municipios/edit', function(){
    return view('administracao.municipio.editar');
});

Route::get('/subsistemas', function(){
    return view('administracao.subsistema.listar');
});

Route::get('/subsistema/add', function(){
    return view('administracao.subsistema.adicionar');
});

Route::get('/subsistema/edit', function(){
    return view('administracao.subsistema.editar');
});

Route::get('/tipologia', function(){
    return view('administracao.tipologia.listar');
});

Route::get('/tipologia/add', function(){
    return view('administracao.tipologia.adicionar');
});

Route::get('/tipologia/edit', function(){
    return view('administracao.tipologia.editar');
});

Route::get('/notas', function(){
    return view('administracao.notas.listar');
});

Route::get('/nota/add', function(){
    return view('administracao.notas.adicionar');
});

Route::get('/nota/edit', function(){
    return view('administracao.notas.editar');
});

Route::get('/suporte', function(){
    return view('suporte.index');
});

Route::get('/suporte/ajuda', function(){
    return view('suporte.ajuda.ajuda');
});

Route::get('/suporte/notificacao', function(){
    return view('suporte.notificacao.notificacao');
});
