<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;

class AdministradoresController extends Controller
{
    public function index(){
        // return "Hola Mundo Laravel";
        return view('administradores.index');
    }
    
    public function banDesban(){
        return view('administradores.banDesban');
    }

    public function listar(){
        $perfiles = Perfil::all();
        return view('administradores.listar', compact('perfiles'));
    }
}
