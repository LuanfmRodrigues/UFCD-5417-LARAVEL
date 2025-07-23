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

Route::prefix('countries')->group(function () {
    Route::get('/','CountryController@index')->name('countries.index');
    Route::get('/create','CountryController@create');
    Route::post('/store','CountryController@store');
    Route::get('{countries}','CountryController@show');
    Route::get('/edit/{id}','CountryController@edit');
    Route::post('/update/{id}','CountryController@update');
    Route::get('/destroy/{id}','CountryController@destroy');
});

Route::prefix('clientes')->group(function () {
    Route::get('/','ClienteController@index')->name('clientes.index');
    Route::get('/create','ClienteController@create');
    Route::post('/store','ClienteController@store');
    Route::get('{clientes}','ClienteController@show');
    Route::get('/edit/{id}','ClienteController@edit');
    Route::post('/update/{id}','ClienteController@update');
    Route::get('/destroy/{id}','ClienteController@destroy');
});

Route::prefix('bikes')->group(function () {
    Route::get('/','BikeController@index')->name('bikes.index');
    Route::get('/create','BikeController@create');
    Route::post('/store','BikeController@store');
    Route::get('{bikes}','BikeController@show');
    Route::get('/edit/{id}','BikeController@edit');
    Route::post('/update/{id}','BikeController@update');
    Route::get('/destroy/{id}','BikeController@destroy');
});
