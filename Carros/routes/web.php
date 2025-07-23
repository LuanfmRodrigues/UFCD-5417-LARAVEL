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

Route::prefix('brands')->group(function () {
   Route::get('/', 'BrandController@index')->name('brands.index');
   Route::get('/create', 'BrandController@create')->name('brands.create');
   Route::post('/store', 'BrandController@store')->name('brands.store');
   Route::get('{brand}', 'BrandController@show')->name('brands.show');
   Route::get('/edit/{id}', 'BrandController@edit')->name('brands.edit');
   Route::post('/update/{id}', 'BrandController@update')->name('brands.update');
   Route::get('/destroy/{id}', 'BrandController@destroy')->name('brands.destroy');
});

Route::prefix('cars')->group(function () {
    Route::get('/', 'CarController@index')->name('cars.index');
    Route::get('/create', 'CarController@create')->name('cars.create');
    Route::post('/store', 'CarController@store')->name('cars.store');
    Route::get('{car}', 'CarController@show')->name('cars.show');
    Route::get('/edit/{id}', 'CarController@edit')->name('cars.edit');
    Route::post('/update/{id}', 'CarController@update')->name('cars.update');
    Route::get('/destroy/{id}', 'CarController@destroy')->name('cars.destroy');
});
