<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Imagen;
use Illuminate\Http\Request;

class sinCuentasController extends Controller
{
    public function index(){
        $usuarios = Cuenta::where('perfil_id', 2)->get();
        $imagenes = Imagen::all();
        return view('sincuentas.index', compact('usuarios', 'imagenes'));
    }
}
