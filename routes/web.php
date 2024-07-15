<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AnoLectivoController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\NivelAcademicoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\SubsistemaController;
use App\Http\Controllers\TipologiaController;
use App\Http\Controllers\TurmaController;

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
Route::delete('/user_profile_aluno/destroy/{id}', [AlunoController::class, 'destroy']);

Route::get('/user_profile_prof', [ProfessorController::class, 'index']);
Route::get('/user_profile_prof/add', [ProfessorController::class, 'create']);
Route::post('/user_profile_prof/store', [ProfessorController::class, 'store']);
Route::get('/user_profile_prof/edit/{id}', [ProfessorController::class, 'edit']);
Route::put('/user_profile_prof/update/{id}', [ProfessorController::class, 'update']);
Route::delete('/user_profile_prof/destroy/{id}', [ProfessorController::class, 'destroy']);

Route::get('/utilizadores', function(){
    return view('utilizadores.index');
});

Route::get('/classes', [ClasseController::class, 'index']);
Route::get('/classe/add', [ClasseController::class, 'create']);
Route::post('/classe/store', [ClasseController::class, 'store']);
Route::get('/classe/edit/{id}', [ClasseController::class, 'edit']);
Route::put('/classe/update/{id}', [ClasseController::class, 'update']);
Route::delete('/classe/destroy/{id}', [ClasseController::class, 'destroy']);

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/curso/add', [CursoController::class, 'create']);
Route::post('/curso/store', [CursoController::class, 'store']);
Route::get('/curso/edit/{id}', [CursoController::class, 'edit']);
Route::put('/curso/update/{id}', [CursoController::class, 'update']);
Route::delete('/cursos/destroy/{id}', [CursoController::class, 'destroy']);

Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplina/add', [DisciplinaController::class, 'create']);
Route::post('/disciplina/store', [DisciplinaController::class, 'store']);
Route::get('/disciplina/edit/{id}', [DisciplinaController::class, 'edit']);
Route::put('/disciplina/update/{id}', [DisciplinaController::class, 'update']);
Route::delete('/disciplina/destroy/{id}', [DisciplinaController::class, 'destroy']);

Route::get('/epocas', function(){
    return view('gestao.epoca.listar');
});

Route::get('/epoca/add', function(){
    return view('gestao.epoca.adicionar');
});

Route::get('/epoca/edit', function(){
    return view('gestao.epoca.editar');
});

Route::get('/nivel_academico', [NivelAcademicoController::class, 'index']);
Route::get('/nivel_academico/add', [NivelAcademicoController::class, 'create']);
Route::post('/nivel_academico/store', [NivelAcademicoController::class, 'store']);
Route::get('/nivel_academico/edit/{id}', [NivelAcademicoController::class, 'edit']);
Route::put('/nivel_academico/update/{id}', [NivelAcademicoController::class, 'update']);
Route::delete('/nivel_academico/destroy/{id}', [NivelAcademicoController::class, 'destroy']);

Route::get('/salas', [SalaController::class, 'index']);
Route::get('/sala/add', [SalaController::class, 'create']);
Route::post('/sala/store', [SalaController::class, 'store']);
Route::get('/sala/edit/{id}', [SalaController::class, 'edit']);
Route::put('/sala/update/{id}', [SalaController::class, 'update']);
Route::delete('/sala/destroy/{id}', [SalaController::class, 'destroy']);

Route::get('/turmas', [TurmaController::class, 'index']);
Route::get('/turma/add', [TurmaController::class, 'create']);
Route::post('/turma/store', [TurmaController::class, 'store']);
Route::get('/turma/edit/{id}', [TurmaController::class, 'edit']);
Route::put('/turma/update/{id}', [TurmaController::class, 'update']);
Route::delete('/turma/destroy/{id}', [TurmaController::class, 'destroy']);

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
Route::post('/ano_lectivo/store', [AnoLectivoController::class, 'store']);
Route::get('/ano_lectivo/edit/{id}', [AnoLectivoController::class, 'edit']);
Route::put('/ano_lectivo/update/{id}', [AnoLectivoController::class, 'update']);
Route::delete('/ano_lectivo/destroy/{id}', [AnoLectivoController::class, 'destroy']);

//FIM DAS ROTAS DA GESTAO

Route::get('/administracao', function(){
    return view('administracao.index');
});

Route::get('/escolas', [EscolaController::class, 'index']);
Route::get('/escola/add', [EscolaController::class, 'create']);
Route::post('/escola/store', [EscolaController::class, 'store']);
Route::get('/escola/edit/{id}', [EscolaController::class, 'edit']);
Route::put('/escola/update/{id}', [EscolaController::class, 'update']);
Route::delete('/escola/destroy/{id}', [EscolaController::class, 'destroy']);

Route::get('/provincias', [ProvinciaController::class, 'index']);
Route::get('/provincias/add', [ProvinciaController::class, 'create']);
Route::post('/provincias/store', [ProvinciaController::class, 'store']);
Route::get('/provincias/edit/{id}', [ProvinciaController::class, 'edit']);
Route::put('/provincias/update/{id}', [ProvinciaController::class, 'update']);
Route::delete('/provincias/destroy/{id}', [ProvinciaController::class, 'destroy']);

Route::get('/municipios', [MunicipioController::class, 'index']);
Route::get('/municipios/add', [MunicipioController::class, 'create']);
Route::post('/municipios/store', [MunicipioController::class, 'store']);
Route::get('/municipios/edit/{id}', [MunicipioController::class, 'edit']);
Route::put('/municipios/update/{id}', [MunicipioController::class, 'update']);
Route::delete('/municipios/destroy/{id}', [MunicipioController::class, 'destroy']);

Route::get('/subsistemas', [SubsistemaController::class, 'index']);
Route::get('/subsistema/add', [SubsistemaController::class, 'create']);
Route::post('/subsistema/store', [SubsistemaController::class, 'store']);
Route::get('/subsistema/edit/{id}', [SubsistemaController::class, 'edit']);
Route::put('/subsistema/update/{id}', [SubsistemaController::class, 'update']);
Route::delete('/subsistema/destroy/{id}', [SubsistemaController::class, 'destroy']);

Route::get('/tipologia', [TipologiaController::class, 'index']);
Route::get('/tipologia/add', [TipologiaController::class, 'create']);
Route::post('/tipologia/store', [TipologiaController::class, 'store']);
Route::get('/tipologia/edit/{id}', [TipologiaController::class, 'edit']);
Route::put('/tipologia/update/{id}', [TipologiaController::class, 'update']);
Route::delete('/tipologia/destroy/{id}', [TipologiaController::class, 'destroy']);

Route::get('/notas', [NotaController::class, 'index']);
Route::get('/nota/add', [NotaController::class, 'create']);
Route::post('/notas/store', [NotaController::class, 'store']);
Route::get('/nota/edit/{id}', [NotaController::class, 'edit']);
Route::put('/nota/update/{id}', [NotaController::class, 'update']);
Route::delete('/nota/destroy/{id}', [NotaController::class, 'destroy']);

Route::get('/suporte', function(){
    return view('suporte.index');
});

Route::get('/suporte/ajuda', function(){
    return view('suporte.ajuda.ajuda');
});

Route::get('/suporte/notificacao', function(){
    return view('suporte.notificacao.notificacao');
});
