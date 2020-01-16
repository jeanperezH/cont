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
    return view('contenido.contenido');
});
//Producto
Route::get('/Producto','ProductoController@index');
Route::post('/Producto/registrar','ProductoController@store');
Route::put('/Producto/actualizar','ProductoController@update');
Route::get('/Producto/selectProducto','ProductoController@selectProducto');
Route::get('/Producto/listarPdf','ProductoController@listarPdf')->name('productos_pdf');
//Entrada
Route::get('/Entrada','EntradaController@index');
Route::post('/Entrada/registrar','EntradaController@store');
Route::get('/Entrada/listarPdf/{id}','EntradaController@listarPdf')->name('entradas_pdf');
//Salida
Route::get('/Salida','SalidaController@index');
Route::post('/Salida/registrar','SalidaController@store');
//Route::get('/Salida/listarPdf/{id}','SalidaController@listarPdf')->name('entradas_pdf');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
