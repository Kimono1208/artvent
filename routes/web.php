<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\PiezasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToldosController;
use Illuminate\Support\Facades\Hash;
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
Route::view('tables','admin/tables');
Route::view('piezas','formulariosc/piezas');
Route::view('clientes','formulariosc/clientes');
Route::view('evento','formulariosc/eventos');
Route::view('toldos','formulariosc/toldos');

//controlador
//-----------PIEZAS
Route::resource('/admin/piezas', PiezasController::class)/* ->middleware('auth') */;
//-----------TOLDOS
Route::resource('/admin/toldos', ToldosController::class);
//-----------EVENTOS
Route::resource('/admin/eventos', EventosController::class);
//-----------CLIENTES
Route::resource('/admin/clientes', ClientesController::class);


//LOGIN AND AUTHENTICATE
/* Route::get('/login',[LoginController::class,'show'])->name('login');
Route::post('/authentication',[LoginController::class,'authenticate'])->name('authenticate');


Route::get('/logout',[LoginController::class,'logOut'])->name('logout')->middleware('auth');
Route::get('/dashboard',[LoginController::class,'dashboard'])->name("dashboard")->middleware('auth'); */


Route::get('/users/insert', function () {
    $user=new \App\Models\User();
    $user->name="juancha";
    $user->email="juancha@gmail.com";
    $user->password=Hash::make('juancha@gmail.com');
    //$user->image='storage/imagenes/usuarios/default.png';
    $user->role='dueno';
    //$user->estatus=1;

    $user->save();

    return 'Usuario autenticado';
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
