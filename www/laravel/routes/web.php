<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::match(['get', 'put'], 'aluno/{id?}',['as' => 'aluno', function($id = null) {
//   return "Página dos Alunos Lindos! $id";
// }]);


Route::group(['middleware' => 'web'], function() {
    
    Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('aluno/listar', 'AlunoController@listar');

});


Route::get('olamundo/index/{nome}', 'OlaMundoController@index');

Route::get('olamundo/view', 'OlaMundoController@view');

Route::get('aluno/inserir', 'AlunoController@inserir');

Route::get('aluno/alterar/{id}', 'AlunoController@alterar');

Route::post('aluno/salvar/{id?}', 'AlunoController@salvar');

Route::get('aluno/excluir/{id}', 'AlunoController@excluir');

Route::get('estados', 'CidadeController@index');

Route::get('cidades/{id}', 'CidadeController@cidades');


