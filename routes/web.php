<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\sinCuentasController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [LogController::class, 'login'])->name('login');


Route::post('/usuarios/login',[UsuariosController::class,'autenticar'])->name('usuarios.autenticar');
Route::get('/usuarios/salir',[UsuariosController::class,'salir'])->name('usuarios.salir');

Route::get('/cuentas',[CuentasController::class,'index'])->name('cuentas.index');
Route::post('/cuentas',[CuentasController::class,'store'])->name('cuentas.store');

Route::get('/sinCuentas',[sinCuentasController::class,'index'])->name('sincuentas.index');

Route::get('artistas', [ArtistasController::class, 'index'])->name('artistas.index')->middleware('auth');
Route::get('/artistas/gestionar', [ArtistasController::class, 'gestionar'])->name('artistas.gestionar')->middleware('auth');
Route::get('/artistas/listar', [ArtistasController::class, 'listar'])->name('artistas.listar')->middleware('auth');
Route::get('/artistas/agregar', [ArtistasController::class, 'agregar'])->name('artistas.agregar')->middleware('auth');
Route::post('/artistas/agregar', [ArtistasController::class, 'guardarImagen'])->name('artistas.guardarImagen')->middleware('auth');
Route::get('/artistas/editar', [ArtistasController::class, 'editar'])->name('artistas.editar')->middleware('auth');
Route::get('/artistas/borrar', [ArtistasController::class, 'borrar'])->name('artistas.borrar')->middleware('auth');

Route::get('/administradores', [AdministradoresController::class, 'index'])->name('administradores.index')->middleware('auth');
Route::get('/administradores/listar', [AdministradoresController::class, 'listar'])->name('administradores.listar')->middleware('auth');
Route::get('/administradores/banDesban', [AdministradoresController::class, 'banDesban'])->name('administradores.banDesban')->middleware('auth');
Route::post('/administradores/banearImagen',[AdministradoresController::class, 'banearImagen'])->name('administradores.banearImagen')->middleware('auth');









