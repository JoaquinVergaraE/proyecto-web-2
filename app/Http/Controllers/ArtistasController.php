<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    public function index(){
        // return "Hola Mundo Laravel";
        return view('artistas.index');
    }

    public function gestionar(){
        return view('artistas.gestionar');
    }

    public function listar(){
        return view('artistas.listar');
    }
    public function agregar(){
        return view('artistas.agregar');
    }
    public function editar(){
        return view('artistas.editar');
    }
    public function borrar(){
        return view('artistas.borrar');
    }
}
