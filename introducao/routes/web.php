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
    return view('welcome');
});

Route::get('/clientes','ClienteController@listar');
Route::get('/clientes/listar','ClienteController@listar2');
Route::get('/clientes/novo','ClienteController@novo');
Route::get('/clientes/editar/{id}','ClienteController@editar')->where('id','[0-9]');
//Route::get('/clientes/editar/{id}','ClienteController@editar')->where('id','[A-Za-z0-9]');