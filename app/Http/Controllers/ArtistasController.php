<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Imagen;
use App\Models\Cuenta;

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
    public function guardarImagen(Request $request){
        $user = Auth::guard('web')->user();
        $imagen = new Imagen();
        $imagen->titulo = $request->titulo;
        $imagen->archivo = '';
        $imagen->baneada = false;
        $imagen->motivo_ban = null;
        $imagen->cuenta_user = "carlos_guerra";
        
        //if ($request->hasFile('imagen')){
            $archivo=$request->file('imagenn');
            $nombreArchivo = uniqid().'.'.$archivo->extension();
            $archivo->storeAs('images', $nombreArchivo);
            $rutaArchivo = $archivo->storeAs('images', $nombreArchivo);
            $imagen->archivo = $rutaArchivo;
        //}

        $imagen->save();

        return redirect()->route('artistas.gestionar')->with('success', 'Imagen guardada exitosamente');
    }
    public function editar(){
        return view('artistas.editar');
    }
    public function borrar(){
        return view('artistas.borrar');
    }
}
