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

Route::get('/livros', 'App\Http\Controllers\LivrosController@index')->name('livros.index');

Route::get('/autores', 'App\Http\Controllers\AutoresController@index')->name('autores.index');

Route::get('/editoras', 'App\Http\Controllers\EditorasController@index')->name('editoras.index');

Route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('generos.index');

Route::get('/livros/{id}/show', 'App\Http\Controllers\LivrosController@show')->name('livros.show');

Route::get('/autores/{id}/show', 'App\Http\Controllers\AutoresController@show')->name('autores.show');

Route::get('/editoras/{id}/show', 'App\Http\Controllers\EditorasController@show')->name('editoras.show');

Route::get('/generos/{id}/show', 'App\Http\Controllers\GenerosController@show')->name('generos.show');