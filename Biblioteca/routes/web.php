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

Route::prefix('books')->group(function () {
    Route::get('/', 'BookController@index')->name('books.index');

});
Route::prefix('authors')->group(function () {
    Route::get('/', 'AuthorController@index')->name('authors.index');
});
Route::prefix('customers')->group(function () {
    Route::get('/', 'CustomerController@index')->name('customers.index');
});
Route::prefix('publishers')->group(function () {
    Route::get('/', 'PublisherController@index')->name('publishers.index');
});
Route::prefix('loans')->group(function () {
    Route::get('/', 'LoanController@index')->name('loans.index');
});
