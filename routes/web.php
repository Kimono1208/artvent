<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('plantilla','plantilla/plantilla');
Route::view('plantillaa','plantilla/plantilla_adm');
Route::view('welcome','cliente/welcome');
Route::view('about','cliente/acer');
Route::view('contact','cliente/cont');
Route::view('gallery','cliente/gal');
Route::view('team','cliente/equi');
Route::view('pricing','cliente/prec');
Route::view('features','cliente/cara');
Route::view('dashboard','admin/dashboard');
Route::view('tables','admin/tables');
Route::view('piezas','formulariosc/piezas');
Route::view('clientes','formulariosc/clientes');
Route::view('evento','formulariosc/eventos');
Route::view('toldos','formulariosc/toldos');