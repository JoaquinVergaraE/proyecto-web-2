<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Cuenta;
use App\Models\Imagen;

class AdministradoresController extends Controller
{
    public function index(){
        // return "Hola Mundo Laravel";
        return view('administradores.index');
    }
    
    public function banDesban(){
        $cuentas = Cuenta::where('perfil_id', 2)->get();
        $imagenes = Imagen::all();
        return view('administradores.banDesban', compact('cuentas'));
    }

    public function listar(){
        $perfiles = Perfil::all();
        return view('administradores.listar', compact('perfiles'));
    }
}
