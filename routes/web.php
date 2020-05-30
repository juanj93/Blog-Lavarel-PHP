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

Route::get('/', 'PageController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PageController@detalle')->name('notas.detalle');

Route::post('/', 'PageController@crear')->name('notas.crear');

//Router::get('/editar/{id}', 'PageController@editar')->name('notas.editar');
Route::get('/editar/{id}', 'PageController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'PageController@update')->name('notas.update');

Route::delete('/eliminar/{id}', 'PageController@eliminar')->name('notas.eliminar');

Route::get('/fotos', 'PageController@fotos')->name('fotos');

Route::get('/noticias', 'PageController@noticias')->name('noticias');

Route::get('/nosotros/{nombre?}', 'PageController@nosotros')->name('nosotros');

