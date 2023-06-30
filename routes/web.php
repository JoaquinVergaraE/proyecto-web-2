<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\CuentasController;
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
/*ESTOS LOS HABIA USADO PARA PROBAR EN BASE A ID 1 E ID 2*/
//Route::get('/login', [LogController::class, 'index'])->name('login.index');
//Route::get('/login2', [LogController::class, 'login2'])->name('login.login2');

Route::post('/usuarios/login',[UsuariosController::class,'autenticar'])->name('usuarios.autenticar');

Route::get('/cuentas',[CuentasController::class,'index'])->name('cuentas.index');
Route::post('/cuentas',[CuentasController::class,'store'])->name('cuentas.store');

Route::get('/artistas', [ArtistasController::class, 'index'])->name('artistas.index');
Route::get('/artistas/gestionar', [ArtistasController::class, 'gestionar'])->name('artistas.gestionar');
Route::get('/artistas/listar', [ArtistasController::class, 'listar'])->name('artistas.listar');
Route::get('/artistas/agregar', [ArtistasController::class, 'agregar'])->name('artistas.agregar');
Route::get('/artistas/editar', [ArtistasController::class, 'editar'])->name('artistas.editar');
Route::get('/artistas/borrar', [ArtistasController::class, 'borrar'])->name('artistas.borrar');

Route::get('/administradores', [AdministradoresController::class, 'index'])->name('administradores.index');




