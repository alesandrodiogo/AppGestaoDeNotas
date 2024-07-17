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
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

// ROTAS DA GESTAO

Route::get('/gestao', function(){
    return view('gestao.index');
});

Route::get('/user_profile_aluno', [AlunoController::class, 'index'])->middleware('auth');
Route::get('/user_profile_aluno/add', [AlunoController::class, 'create'])->middleware('auth');
Route::post('/alunos/store', [AlunoController::class, 'store']);
Route::get('/user_profile_aluno/edit/{id}', [AlunoController::class, 'edit'])->middleware('auth');
Route::put('/user_profile_aluno/update/{id}', [AlunoController::class, 'update'])->middleware('auth');
Route::get('/user_profile_aluno/ver/{id}', [AlunoController::class, 'show'])->middleware('auth');
Route::delete('/user_profile_aluno/destroy/{id}', [AlunoController::class, 'destroy'])->middleware('auth');

Route::get('/user_profile_prof', [ProfessorController::class, 'index'])->middleware('auth');
Route::get('/user_profile_prof/add', [ProfessorController::class, 'create'])->middleware('auth');
Route::post('/user_profile_prof/store', [ProfessorController::class, 'store'])->middleware('auth');
Route::get('/user_profile_prof/edit/{id}', [ProfessorController::class, 'edit'])->middleware('auth');
Route::put('/user_profile_prof/update/{id}', [ProfessorController::class, 'update'])->middleware('auth');
Route::delete('/user_profile_prof/destroy/{id}', [ProfessorController::class, 'destroy'])->middleware('auth');

Route::get('/utilizadores', function(){
    return view('utilizadores.index');
})->middleware('auth');

Route::get('/classes', [ClasseController::class, 'index'])->middleware('auth');
Route::get('/classe/add', [ClasseController::class, 'create'])->middleware('auth');
Route::post('/classe/store', [ClasseController::class, 'store'])->middleware('auth');
Route::get('/classe/edit/{id}', [ClasseController::class, 'edit'])->middleware('auth');
Route::put('/classe/update/{id}', [ClasseController::class, 'update'])->middleware('auth');
Route::delete('/classe/destroy/{id}', [ClasseController::class, 'destroy'])->middleware('auth');

Route::get('/cursos', [CursoController::class, 'index'])->middleware('auth');
Route::get('/curso/add', [CursoController::class, 'create'])->middleware('auth');
Route::post('/curso/store', [CursoController::class, 'store'])->middleware('auth');
Route::get('/curso/edit/{id}', [CursoController::class, 'edit'])->middleware('auth');
Route::put('/curso/update/{id}', [CursoController::class, 'update'])->middleware('auth');
Route::delete('/cursos/destroy/{id}', [CursoController::class, 'destroy'])->middleware('auth');

Route::get('/disciplinas', [DisciplinaController::class, 'index'])->middleware('auth');
Route::get('/disciplina/add', [DisciplinaController::class, 'create'])->middleware('auth');
Route::post('/disciplina/store', [DisciplinaController::class, 'store'])->middleware('auth');
Route::get('/disciplina/edit/{id}', [DisciplinaController::class, 'edit'])->middleware('auth');
Route::put('/disciplina/update/{id}', [DisciplinaController::class, 'update'])->middleware('auth');
Route::delete('/disciplina/destroy/{id}', [DisciplinaController::class, 'destroy'])->middleware('auth');


Route::get('/nivel_academico', [NivelAcademicoController::class, 'index'])->middleware('auth');
Route::get('/nivel_academico/add', [NivelAcademicoController::class, 'create'])->middleware('auth');
Route::post('/nivel_academico/store', [NivelAcademicoController::class, 'store'])->middleware('auth');
Route::get('/nivel_academico/edit/{id}', [NivelAcademicoController::class, 'edit'])->middleware('auth');
Route::put('/nivel_academico/update/{id}', [NivelAcademicoController::class, 'update'])->middleware('auth');
Route::delete('/nivel_academico/destroy/{id}', [NivelAcademicoController::class, 'destroy'])->middleware('auth');

Route::get('/salas', [SalaController::class, 'index'])->middleware('auth');
Route::get('/sala/add', [SalaController::class, 'create'])->middleware('auth');
Route::post('/sala/store', [SalaController::class, 'store'])->middleware('auth');
Route::get('/sala/edit/{id}', [SalaController::class, 'edit'])->middleware('auth');
Route::put('/sala/update/{id}', [SalaController::class, 'update'])->middleware('auth');
Route::delete('/sala/destroy/{id}', [SalaController::class, 'destroy'])->middleware('auth');

Route::get('/turmas', [TurmaController::class, 'index'])->middleware('auth');
Route::get('/turma/add', [TurmaController::class, 'create'])->middleware('auth');
Route::post('/turma/store', [TurmaController::class, 'store'])->middleware('auth');
Route::get('/turma/edit/{id}', [TurmaController::class, 'edit'])->middleware('auth');
Route::put('/turma/update/{id}', [TurmaController::class, 'update'])->middleware('auth');
Route::delete('/turma/destroy/{id}', [TurmaController::class, 'destroy'])->middleware('auth');


Route::get('/ano_lectivo', [AnoLectivoController::class, 'index'])->middleware('auth');
Route::get('/ano_lectivo/add', [AnoLectivoController::class, 'create'])->middleware('auth');
Route::post('/ano_lectivo/store', [AnoLectivoController::class, 'store'])->middleware('auth');
Route::get('/ano_lectivo/edit/{id}', [AnoLectivoController::class, 'edit'])->middleware('auth');
Route::put('/ano_lectivo/update/{id}', [AnoLectivoController::class, 'update'])->middleware('auth');
Route::delete('/ano_lectivo/destroy/{id}', [AnoLectivoController::class, 'destroy'])->middleware('auth');

//FIM DAS ROTAS DA GESTAO

Route::get('/administracao', function(){
    return view('administracao.index');
})->middleware('auth');

Route::get('/escolas', [EscolaController::class, 'index'])->middleware('auth');
Route::get('/escola/add', [EscolaController::class, 'create'])->middleware('auth');
Route::post('/escola/store', [EscolaController::class, 'store'])->middleware('auth');
Route::get('/escola/edit/{id}', [EscolaController::class, 'edit'])->middleware('auth');
Route::put('/escola/update/{id}', [EscolaController::class, 'update'])->middleware('auth');
Route::delete('/escola/destroy/{id}', [EscolaController::class, 'destroy'])->middleware('auth');

Route::get('/provincias', [ProvinciaController::class, 'index'])->middleware('auth');
Route::get('/provincias/add', [ProvinciaController::class, 'create'])->middleware('auth');
Route::post('/provincias/store', [ProvinciaController::class, 'store'])->middleware('auth');
Route::get('/provincias/edit/{id}', [ProvinciaController::class, 'edit'])->middleware('auth');
Route::put('/provincias/update/{id}', [ProvinciaController::class, 'update'])->middleware('auth');
Route::delete('/provincias/destroy/{id}', [ProvinciaController::class, 'destroy'])->middleware('auth');

Route::get('/municipios', [MunicipioController::class, 'index'])->middleware('auth');
Route::get('/municipios/add', [MunicipioController::class, 'create'])->middleware('auth');
Route::post('/municipios/store', [MunicipioController::class, 'store'])->middleware('auth');
Route::get('/municipios/edit/{id}', [MunicipioController::class, 'edit'])->middleware('auth');
Route::put('/municipios/update/{id}', [MunicipioController::class, 'update'])->middleware('auth');
Route::delete('/municipios/destroy/{id}', [MunicipioController::class, 'destroy'])->middleware('auth');

Route::get('/subsistemas', [SubsistemaController::class, 'index'])->middleware('auth');
Route::get('/subsistema/add', [SubsistemaController::class, 'create'])->middleware('auth');
Route::post('/subsistema/store', [SubsistemaController::class, 'store'])->middleware('auth');
Route::get('/subsistema/edit/{id}', [SubsistemaController::class, 'edit'])->middleware('auth');
Route::put('/subsistema/update/{id}', [SubsistemaController::class, 'update'])->middleware('auth');
Route::delete('/subsistema/destroy/{id}', [SubsistemaController::class, 'destroy'])->middleware('auth');

Route::get('/tipologia', [TipologiaController::class, 'index'])->middleware('auth');
Route::get('/tipologia/add', [TipologiaController::class, 'create'])->middleware('auth');
Route::post('/tipologia/store', [TipologiaController::class, 'store'])->middleware('auth');
Route::get('/tipologia/edit/{id}', [TipologiaController::class, 'edit'])->middleware('auth');
Route::put('/tipologia/update/{id}', [TipologiaController::class, 'update'])->middleware('auth');
Route::delete('/tipologia/destroy/{id}', [TipologiaController::class, 'destroy'])->middleware('auth');

Route::get('/notas', [NotaController::class, 'index'])->middleware('auth');
Route::get('/nota/add', [NotaController::class, 'create'])->middleware('auth');
Route::post('/notas/store', [NotaController::class, 'store'])->middleware('auth');
Route::get('/nota/edit/{id}', [NotaController::class, 'edit'])->middleware('auth');
Route::put('/nota/update/{id}', [NotaController::class, 'update'])->middleware('auth');
Route::delete('/nota/destroy/{id}', [NotaController::class, 'destroy'])->middleware('auth');

Route::get('/suporte', function(){
    return view('suporte.index');
});

Route::get('/suporte/ajuda', function(){
    return view('suporte.ajuda.ajuda');
});

Route::get('/suporte/notificacao', function(){
    return view('suporte.notificacao.notificacao');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
