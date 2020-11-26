<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courses', 'CoursesController@index')->name('courses')->middleware('auth');;
Route::post('/courses', 'CoursesController@store')->middleware('auth');;
Route::get('/courses/create', 'CoursesController@create')->middleware('auth');;

Route::get('/students', 'StudentsController@index')->middleware('auth');;

Route::get('/table', 'TableController@index')->name('table')->middleware('auth');;
