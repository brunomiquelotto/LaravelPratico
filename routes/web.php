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

Auth::routes();

Route::get('/home', function(){
	return view('welcome');
});

Route::get('/welcome', function(){
	return view('welcome');
});

Route::get('/cliente', ['uses'=>'ClienteController@index', 'as' => 'cliente.index']);
Route::get('/cliente/adicionar', ['uses'=>'ClienteController@adicionar', 'as' => 'cliente.adicionar']);
Route::get('/cliente/editar/{id}', ['uses'=>'ClienteController@editar', 'as' => 'cliente.editar']);
Route::get('/cliente/deletar/{id}', ['uses'=>'ClienteController@deletar', 'as' => 'cliente.deletar']);
Route::post('/cliente/salvar', ['uses'=>'ClienteController@salvar', 'as' => 'cliente.salvar']);
Route::put('/cliente/atualizar/id{id}', ['uses'=>'ClienteController@atualizar', 'as' => 'cliente.atualizar']);

Route::get('/cliente/detalhe/{id}', ['uses' => 'ClienteController@detalhe', 'as' => 'cliente.detalhe']);

Route::get('/telefone/adicionar/{id}', ['uses' => 'TelefoneController@adicionar', 'as' => 'telefone.adicionar']);
Route::post('/telefone/salvar/{id}', ['uses' => 'TelefoneController@salvar', 'as' => 'telefone.salvar']);

Route::get('/telefone/editar/{id}', ['uses'=>'TelefoneController@editar', 'as' => 'telefone.editar']);
Route::get('/telefone/deletar/{id}', ['uses'=>'TelefoneController@deletar', 'as' => 'telefone.deletar']);
Route::put('/telefone/atualizar/{id}', ['uses'=>'TelefoneController@atualizar', 'as' => 'telefone.atualizar']);
