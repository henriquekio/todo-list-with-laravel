<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::post('/cadastrar-usuario', 'UsuarioController@registrar')->name('cadastro-usuario');
Route::post('/login', 'UsuarioController@login')->name('login');
Route::get('/logout', 'UsuarioController@login')->name('logout');


Route::group(['prefix' => 'inicio', 'as' => 'home.', 'middleware' => 'auth'], function () {
    Route::get('/', 'IndexController@paginaInicial')->name('inicio');

    Route::get('/categorias', function () {
        return view('categorias');
    });
});

Route::group(['prefix' => 'tarefas', 'as' => 'tarefas.', 'middleware' => 'auth'], function () {
    Route::get('/', 'IndexController@tarefa')->name('inicio');
    Route::post('/cadastrar', 'TarefaController@inserir')->name('cadastrar');
    Route::get('/lista-tarefas', 'IndexController@listaTarefas')->name('listagem');
    Route::post('/excluir', 'TarefaController@remover')->name('remover');
    Route::post('/iniciar', 'TarefaController@iniciarTarefa')->name('iniciar');
});

Route::group(['prefix' => 'categorias', 'as' => 'categorias.', 'middleware' => 'auth'], function(){
    Route::get('/', 'IndexController@categoria')->name('inicio');
    Route::post('/cadastrar', 'CategoriaController@ajaxCadastrar')->name('cadastrar');
    Route::post('/alterar', 'CategoriaController@ajaxAlterar')->name('alterar');
});
