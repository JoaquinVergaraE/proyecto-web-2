<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    public function index(){
        // return "Hola Mundo Laravel";
        return view('administradores.index');
    }
}
