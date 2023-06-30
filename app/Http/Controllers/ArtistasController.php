<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    public function index(){
        // return "Hola Mundo Laravel";
        return view('artistas.index');
    }
}
