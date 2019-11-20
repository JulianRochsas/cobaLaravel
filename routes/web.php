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

use App\Student;

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

//STUDENTS
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{students}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{students}', 'StudentsController@destroy');
Route::get('/students/{students}/edit', 'StudentsController@edit');
Route::patch('/students/{students}', 'StudentsController@update');
// Route::resource('students', 'StudentsController');

//JURUSAN
Route::get('/jurusan', 'JurusanController@index');
Route::get('/jurusan/create', 'JurusanController@create');
Route::post('/jurusan', 'JurusanController@store');
Route::delete('/jurusan/{jurusan}/destroy', 'JurusanController@destroy');
Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit');
Route::patch('/jurusan/{jurusan}', 'JurusanController@update');
// Route::resource('jurusan', 'JurusanController');
