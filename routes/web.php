<?php

use App\Http\Controllers\PiezasController;
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

//controlador
Route::get('/admin/piezas',[PiezasController::class,'listado'])->name('piezas.index');
Route::get('/admin/piezas/{id}',[PiezasController::class,'select'])->name('piezas.show');
Route::get('/admin/piezas/formulario',[PiezasController::class,'formulario'])->name('piezas.create');
Route::get('/admin/piezas/{id}/editar',[PiezasController::class,'editar'])->name('piezas.edit');
Route::post('/admin/piezas/insertar',[PiezasController::class,'guardar'])->name('piezas.store');
Route::put('/admin/piezas/{id}',[PiezasController::class,'actualizar'])->name('piezas.update');
Route::delete('/admin/piezas/{id}',[PiezasController::class,'borrar'])->name('piezas.delete');

