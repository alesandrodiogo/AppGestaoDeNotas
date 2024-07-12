<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AnoLectivoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\SubsistemaController;
use App\Http\Controllers\TipologiaController;
use App\Http\Controllers\TurmaController;
use App\Models\Nota;

Route::get('/', function () {
    return view('welcome');
});

// ROTAS DA GESTAO

Route::get('/gestao', function(){
    return view('gestao.index');
});

Route::get('/user_profile_aluno', [AlunoController::class, 'index']);
Route::get('/user_profile_aluno/add', [AlunoController::class, 'create']);
Route::post('/alunos/store', [AlunoController::class, 'store']);
Route::get('/user_profile_aluno/edit/{id}', [AlunoController::class, 'edit']);
Route::put('/user_profile_aluno/update/{id}', [AlunoController::class, 'update']);
Route::get('/user_profile_aluno/ver/{id}', [AlunoController::class, 'show']);

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

Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplina/add', [DisciplinaController::class, 'create']);
Route::post('/disciplina/store', [DisciplinaController::class, 'store']);
Route::get('/disciplina/edit/{id}', [DisciplinaController::class, 'edit']);
Route::put('/disciplina/update/{id}', [DisciplinaController::class, 'update']);

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

Route::get('/salas', [SalaController::class, 'index']);
Route::get('/sala/add', [SalaController::class, 'create']);
Route::post('/sala/store', [SalaController::class, 'store']);
Route::get('/sala/edit/{id}', [SalaController::class, 'edit']);
Route::put('/sala/update/{id}', [SalaController::class, 'update']);

Route::get('/turmas', [TurmaController::class, 'index']);
Route::get('/turma/add', [TurmaController::class, 'create']);
Route::post('/turma/store', [TurmaController::class, 'store']);
Route::get('/turma/edit/{id}', [TurmaController::class, 'edit']);
Route::put('/turma/update/{id}', [TurmaController::class, 'update']);

Route::get('/turnos', function(){
    return view('gestao.turno.listar');
});

Route::get('/turno/add', function(){
    return view('gestao.turno.adicionar');
});

Route::get('/turno/edit', function(){
    return view('gestao.turno.editar');
});

Route::get('/ano_lectivo', [AnoLectivoController::class, 'index']);
Route::get('/ano_lectivo/add', [AnoLectivoController::class, 'create']);
Route::post('/escola/store', [AnoLectivoController::class, 'store']);
Route::get('/ano_lectivo/edit/{id}', [AnoLectivoController::class, 'edit']);
Route::put('/ano_lectivo/update/{id}', [AnoLectivoController::class, 'update']);

//FIM DAS ROTAS DA GESTAO

Route::get('/administracao', function(){
    return view('administracao.index');
});

Route::get('/escolas', [EscolaController::class, 'index']);
Route::get('/escola/add', [EscolaController::class, 'create']);
Route::post('/escola/store', [EscolaController::class, 'store']);
Route::get('/escola/edit/{id}', [EscolaController::class, 'edit']);
Route::put('/escola/update/{id}', [EscolaController::class, 'update']);

Route::get('/provincias', [ProvinciaController::class, 'index']);
Route::get('/provincias/add', [ProvinciaController::class, 'create']);
Route::post('/provincias/store', [ProvinciaController::class, 'store']);
Route::get('/provincias/edit/{id}', [ProvinciaController::class, 'edit']);
Route::put('/provincias/update/{id}', [ProvinciaController::class, 'update']);

Route::get('/municipios', [MunicipioController::class, 'index']);
Route::get('/municipios/add', [MunicipioController::class, 'create']);
Route::post('/municipios/store', [MunicipioController::class, 'store']);
Route::get('/municipios/edit/{id}', [MunicipioController::class, 'edit']);
Route::put('/municipios/update/{id}', [MunicipioController::class, 'update']);

Route::get('/subsistemas', [SubsistemaController::class, 'index']);
Route::get('/subsistema/add', [SubsistemaController::class, 'create']);
Route::post('/subsistema/store', [SubsistemaController::class, 'store']);
Route::get('/subsistema/edit/{id}', [SubsistemaController::class, 'edit']);
Route::put('/subsistema/update/{id}', [SubsistemaController::class, 'update']);

Route::get('/tipologia', [TipologiaController::class, 'index']);
Route::get('/tipologia/add', [TipologiaController::class, 'create']);
Route::post('/tipologia/store', [TipologiaController::class, 'store']);
Route::get('/tipologia/edit/{id}', [TipologiaController::class, 'edit']);
Route::put('/tipologia/update/{id}', [TipologiaController::class, 'update']);

Route::get('/notas', [NotaController::class, 'index']);
Route::get('/nota/add', [NotaController::class, 'create']);
Route::post('/notas/store', [NotaController::class, 'store']);
Route::get('/nota/edit/{id}', [NotaController::class, 'edit']);
Route::put('/nota/update/{id}', [AlunoController::class, 'update']);

Route::get('/suporte', function(){
    return view('suporte.index');
});

Route::get('/suporte/ajuda', function(){
    return view('suporte.ajuda.ajuda');
});

Route::get('/suporte/notificacao', function(){
    return view('suporte.notificacao.notificacao');
});
