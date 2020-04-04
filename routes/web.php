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

/*
Route::get('/cursos', 'CourseController@index');

Route::get('/cursos/{id}', 'CourseController@edit');

Route::put('/cursos', 'CourseController@update');
*/

Route::resource('courses', 'CourseController');