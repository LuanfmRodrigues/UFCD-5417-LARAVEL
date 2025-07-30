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

Route::prefix('publishers')->group(function () {
    Route::get('/', 'PublisherController@index')->name('index.publishers');
});
Route::prefix('authors')->group(function () {
    route::get('/', 'AuthorController@index')->name('index.authors');
});
Route::prefix('books')->group(function () {
    route::get('/', 'BookController@index')->name('index.books');
});
Route::prefix('loans')->group(function () {
    Route::get('/', 'LoanController@index')->name('index.loans');
});
