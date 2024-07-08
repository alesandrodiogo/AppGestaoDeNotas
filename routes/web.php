<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gestao', function(){
    return view('gestao.index');
});

Route::get('/user_profile_aluno', function(){
    return view('utilizadores.aluno.listar');
});

Route::get('/user_profile_aluno/add', function(){
    return view('utilizadores.aluno.adicionar');
});

Route::get('/user_profile_aluno/edit', function(){
    return view('utilizadores.aluno.editar');
});

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
