<?php

use App\Http\Controllers\PiezasController;
use App\Http\Controllers\toldosController;
use App\Http\Controllers\eventosController;
use App\Http\Controllers\clientesController;
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
//-----------PIEZAS
Route::post('/admin/piezas/insertar',[PiezasController::class,'guardar'])->name('piezas.store');
Route::get('/admin/piezas',[PiezasController::class,'listado'])->name('piezas.index');
Route::get('/admin/piezas/formulario',[PiezasController::class,'formulario'])->name('piezas.create');
Route::get('/admin/piezas/{id}/editar',[PiezasController::class,'editar'])->name('piezas.edit');
Route::get('/admin/piezas/{id}',[PiezasController::class,'select'])->name('piezas.show');

Route::put('/admin/piezas/{id}',[PiezasController::class,'actualizar'])->name('piezas.update');
Route::delete('/admin/piezas/{id}',[PiezasController::class,'borrar'])->name('piezas.delete');


//-----------TOLDOS
Route::post('/admin/toldos/insertar',[toldosController::class,'guardar'])->name('toldos.store');
Route::get('/admin/toldos',[toldosController::class,'listado'])->name('toldos.index');
Route::get('/admin/toldos/formulario',[toldosController::class,'formulario'])->name('toldos.create');
Route::get('/admin/toldos/{id}/editar',[toldosController::class,'editar'])->name('toldos.edit');
Route::get('/admin/toldos/{id}',[toldosController::class,'select'])->name('toldos.show');
Route::put('/admin/toldos/{id}',[toldosController::class,'actualizar'])->name('toldos.update');
Route::delete('/admin/toldos/{id}',[toldosController::class,'borrar'])->name('toldos.delete');

//-----------EVENTOS
Route::post('/admin/eventos/insertar',[eventosController::class,'guardar'])->name('eventos.store');
Route::get('/admin/eventos',[eventosController::class,'listado'])->name('eventos.index');
Route::get('/admin/eventos/formulario',[eventosController::class,'formulario'])->name('eventos.create');
Route::get('/admin/eventos/{id}/editar',[eventosController::class,'editar'])->name('eventos.edit');
Route::get('/admin/eventos/{id}',[eventosController::class,'select'])->name('eventos.show');
Route::put('/admin/eventos/{id}',[eventosController::class,'actualizar'])->name('eventos.update');
Route::delete('/admin/eventos/{id}',[eventosController::class,'borrar'])->name('eventos.delete');

//-----------CLIENTES
Route::post('/admin/clientes/insertar',[clientesController::class,'guardar'])->name('clientes.store');
Route::get('/admin/clientes',[clientesController::class,'listado'])->name('clientes.index');
Route::get('/admin/clientes/formulario',[clientesController::class,'formulario'])->name('clientes.create');
Route::get('/admin/clientes/{id}/editar',[clientesController::class,'editar'])->name('clientes.edit');
Route::get('/admin/clientes/{id}',[clientesController::class,'select'])->name('clientes.show');
Route::put('/admin/clientes/{id}',[clientesController::class,'actualizar'])->name('clientes.update');
Route::delete('/admin/clientes/{id}',[clientesController::class,'borrar'])->name('clientes.delete');
