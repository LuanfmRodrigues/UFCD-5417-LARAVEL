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

Route::prefix('students')->group(function () {
    Route::get('/', 'StudentController@index')->name('students.index');;
});
Route::prefix('enrollments')->group(function () {
    Route::get('/', 'EnrollmentController@index')->name('enrollments.index');;
});

Route::prefix('courses')->group(function () {
    Route::get('/', 'CourseController@index')->name('courses.index');;
});
Route::prefix('instructors')->group(function () {
    Route::get('/', 'InstructorController@index')->name('instructors.index');;
});
