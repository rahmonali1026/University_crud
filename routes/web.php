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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', 'App\Http\Controllers\StudentController@index')->name('post.index');
Route::get('/posts/create', 'App\Http\Controllers\StudentController@create')->name('post.create');
Route::post('/posts', 'App\Http\Controllers\StudentController@store')->name('post.store');
Route::get('/posts/{post}', 'App\Http\Controllers\StudentController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\StudentController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'App\Http\Controllers\StudentController@update')->name('post.update');
Route::delete('/posts/{post}', 'App\Http\Controllers\StudentController@destroy')->name('post.delete');

