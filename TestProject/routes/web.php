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

Route::prefix('projects')->group(function () {
    Route::get('/', 'ProjectController@index')->name('projects.index');
    Route::get('/create', 'ProjectController@create')->name('projects.create');
    Route::post('/store', 'ProjectController@store')->name('projects.store');
    Route::get('/show/{id}', 'ProjectController@show')->name('projects.show');
    Route::get('/edit/{id}', 'ProjectController@edit')->name('projects.edit');
    Route::post('/update/{id}', 'ProjectController@update')->name('projects.update');
    Route::get('/destroy/{id}', 'ProjectController@destroy')->name('projects.destroy');
});
Route::prefix('categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/store', 'CategoryController@store')->name('categories.store');
    Route::get('/show/{id}', 'CategoryController@show')->name('categories.show');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('categories.edit');
    Route::post('/update/{id}', 'CategoryController@update')->name('categories.update');
    Route::get('/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');
});
Route::prefix('products')->group(function () {
    Route::get('/', 'ProductController@index')->name('products.index');
    Route::get('/create', 'ProductController@create')->name('products.create');
    Route::post('/store', 'ProductController@store')->name('products.store');
    Route::get('/show/{Product}', 'ProductController@show')->name('products.show');
    Route::get('/edit/{id}', 'ProductController@edit')->name('products.edit');
    Route::post('/update/{id}', 'ProductController@update')->name('products.update');
    Route::get('/destroy/{id}', 'ProductController@destroy')->name('products.destroy');
});
