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

Route::get('/', function (){
    return view('welcome');
});

/*
Route::get('/nome', function (){
    return "Francinildo";
});

Route::get('/produto', function (){
    return "Feijão";
});

Route::get('/cliente', function (){
    return "Maria";
});

Route::get('/produto', function (){
    return view('produtos');
});
*/

/*
Route::get('/nome', 'ContatoController@retornanome');

Route::get('/produtos', 'ContatoController@listaProdutos');

Route::get('/contatos', 'ContatoController@listarContatos');
*/

Route::get('contatos', 'ContatoController@index');

Route::get('contatos/create', 'ContatoController@create');
Route::post('contatos/create', 'ContatoController@store');

Route::get('contatos/{id}', 'ContatoController@edit');