<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\ArtistasController;
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

Route::post('/usuarios/login',[UsuariosController::class,'autenticar'])->name('usuarios.autenticar');

Route::get('/', [LogController::class, 'login'])->name('login');
//Route::get('/login', [LogController::class, 'index'])->name('login.index');
//Route::get('/login2', [LogController::class, 'login2'])->name('login.login2');

Route::get('/artistas', [ArtistasController::class, 'index'])->name('artistas.index');

Route::get('/administradores', [AdministradoresController::class, 'index'])->name('administradores.index');
