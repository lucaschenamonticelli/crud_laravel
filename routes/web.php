<?php

use Illuminate\Support\Facades\Route;

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

Route::get('cliente', 'ClienteController@index');
Route::get('cliente/novo', 'ClienteController@cadastro');
Route::get('cliente/editar/{id}', 'ClienteController@cadastro');
Route::get('cliente/deletar/{id}', 'ClienteController@deletar');
Route::post('cliente/salvar', 'ClienteController@salvar');

Route::get('vendedor', 'VendedorController@index');
Route::get('vendedor/novo', 'VendedorController@cadastro');
Route::get('vendedor/editar/{id}', 'VendedorController@cadastro');
Route::get('vendedor/deletar/{id}', 'VendedorController@deletar');