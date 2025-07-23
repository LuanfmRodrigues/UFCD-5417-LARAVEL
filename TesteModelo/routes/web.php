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
    Route::get('/', 'CountryController@index')->name('countries.index');
    Route::get('/create', 'CountryController@create')->name('countries.create');
    Route::post('/store', 'CountryController@store')->name('countries.store');
    Route::get('{countries}','CountryController@show')->name('countries.show');
    Route::get('/edit/{id}', 'CountryController@edit')->name('countries.edit');
    Route::post('/update/{id}', 'CountryController@update')->name('countries.update');

});

Route::prefix('users')->group(function () {
   Route::get('/', 'UserController@index')->name('users.index');
   Route::get('/create', 'UserController@create')->name('users.create');
   Route::post('/store', 'UserController@store')->name('users.store');
   Route::get('{users}','UserController@show')->name('users.show');
   Route::get('/edit/{id}', 'UserController@edit')->name('users.edit');
   Route::post('/update/{id}', 'UserController@update')->name('users.update');
   Route::get('/destroy/{id}', 'UserController@destroy')->name('users.destroy');
});

Route::prefix('bicycles')->group(function () {
    Route::get('/', 'BicycleController@index')->name('bicycles.index');
    Route::get('/create', 'BicycleController@create')->name('bicycles.create');
    Route::post('/store', 'BicycleController@store')->name('bicycles.store');
    Route::get('{bicycle}','BicycleController@show')->name('bicycles.show');
    Route::get('/edit/{id}', 'BicycleController@edit')->name('bicycles.edit');
    Route::post('/update/{id}', 'BicycleController@update')->name('bicycles.update');

});
