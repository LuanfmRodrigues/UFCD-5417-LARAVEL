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

Route::prefix('author')->group(function () {
    Route::get('/', 'AuthorController@index')->name('author.index');
});
 Route::prefix('book')->group(function () {
    Route::get('/', 'BookController@index')->name('book.index');
 });

 Route::prefix('customer')->group(function () {
     Route::get('/', 'CustomerController@index')->name('customer.index');
 });

 Route::prefix('publisher')->group(function () {
     Route::get('/', 'PublisherController@index')->name('publisher.index');
 });
 Route::prefix('request')->group(function () {
     Route::get('/', 'RequestController@index')->name('request.index');
 });
