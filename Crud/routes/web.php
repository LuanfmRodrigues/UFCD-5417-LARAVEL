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

    -- 5º passo - colocar o caminhos de todas as routes por ordem que foi criada

*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/cruds', 'CrudController@index');
Route::get('/cruds/create', 'CrudController@create')->name('cruds.create');
Route::post('/cruds', 'CrudController@store')->name('cruds.store');
Route::get('/cruds/{crud}', 'CrudController@show')->name('cruds.show');
Route::get('/cruds/{crud}/edit', 'CrudController@edit')->name('cruds.edit');
Route::put('/cruds/{crud}', 'CrudController@update')->name('cruds.update');
Route::delete('/cruds/{crud}', 'CrudController@destroy')->name('cruds.destroy');
