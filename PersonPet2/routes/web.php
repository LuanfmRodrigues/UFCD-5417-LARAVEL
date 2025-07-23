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


Route::prefix('people')->group(function(){
    Route::get('/', 'PersonController@index')->name('people.index');
    Route::get('/create', 'PersonController@create')->name('people.create');
    Route::post('/store', 'PersonController@store')->name('people.store');
    Route::get('{people}', 'PersonController@show')->name('people.show');
    Route::get('{people}/edit', 'PersonController@edit')->name('people.edit');
    Route::patch('{people}', 'PersonController@update')->name('people.update');
    Route::delete('{people}', 'PersonController@destroy')->name('people.destroy');
});

Route::prefix('pets')->group(function(){
    Route::get('/', 'PetController@index')->name('pets.index');
    Route::get('/create', 'PetController@create')->name('pets.create');
    Route::post('/store', 'PetController@store')->name('pets.store');
    Route::get('{pet}', 'PetController@show')->name('pets.show');
    Route::get('{pet}/edit', 'PetController@edit')->name('pets.edit');
    Route::patch('{pet}', 'PetController@update')->name('pets.update');
    Route::delete('{pet}', 'PetController@destroy')->name('pets.destroy');
});
