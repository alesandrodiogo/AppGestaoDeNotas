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