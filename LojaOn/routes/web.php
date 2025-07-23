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

Auth::routes();

Route::prefix('clientes')->group(function () {
    Route::get('/', 'ClientesController@index')->name('clientes.index');
    Route::get('/create', 'ClientesController@create');
    Route::post('/store', 'ClientesController@store');
    Route::get('{clientes}', 'ClientesController@show');
    Route::get('/edit/{id}', 'ClientesController@edit');
    Route::put('/update/{id}', 'ClientesController@update');
    Route::get('/destroy/{id}', 'ClientesController@destroy');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', 'ProdutosController@index')->name('produtos.index');
    Route::get('/create', 'ProdutosController@create');
    Route::post('/store', 'ProdutosController@store');
    Route::get('{produtos}', 'ProdutosController@show');
    Route::get('/edit/{id}', 'ProdutosController@edit');
    Route::put('/update/{id}', 'ProdutosController@update');
    Route::get('/destroy/{id}', 'ProdutosController@destroy');
});
Route::prefix('categorias')->group(function () {
    Route::get('/', 'CategoriasController@index')->name('categorias.index');
    Route::get('/create', 'CategoriasController@create');
    Route::post('/store', 'CategoriasController@store');
    Route::get('{categorias}', 'CategoriasController@show');
    Route::get('/edit/{id}', 'CategoriasController@edit');
    Route::put('/update/{id}', 'CategoriasController@update');
    Route::get('/destroy/{id}', 'CategoriasController@destroy');
});

Route::prefix('pedidos')->group(function () {
    Route::get('/', 'PedidosController@index')->name('pedidos.index');
    Route::get('/create', 'PedidosController@create');
    Route::post('/store', 'PedidosController@store');
    Route::get('{pedidos}', 'PedidosController@show');
    Route::get('/edit/{id}', 'PedidosController@edit');
    Route::put('/update/{id}', 'PedidosController@update');
    Route::get('/destroy/{id}', 'PedidosController@destroy');
});
