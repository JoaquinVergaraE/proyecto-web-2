<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Imagen;
use App\Models\Cuenta;
use App\Models\Perfil;

class ArtistasController extends Controller
{
    public function index(){
        return view('artistas.index');
    }

    public function gestionar(){
        return view('artistas.gestionar');
    }

    public function listar(){
        $user = Auth::guard('web')->user();
        $imagenes = $user->imagenes;
        return view('artistas.listar', compact('imagenes'));
    }

    public function cambiarTitulo(Request $request)
    {
    $imagenId = $request->input('imagenId');
    $nuevoTitulo = $request->input('nuevoTitulo');

    // Buscar y actualizar la imagen correspondiente en la base de datos
    $imagen = Imagen::find($imagenId);
    $imagen->titulo = $nuevoTitulo;
    $imagen->save();

    // Redireccionar nuevamente a la misma página
    return redirect()->back();
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
        $imagen->cuenta_user = $user->user;
        $archivo=$request->file('imagenn');
        $nombreArchivo = uniqid().'.'.$archivo->extension();
        /*$archivo->storeAs('images', $nombreArchivo, 'public');
        $rutaArchivo = $archivo->storeAs('images', $nombreArchivo);
        $imagen->archivo = $rutaArchivo;
        $imagen->save();*/
        $rutaArchivo = public_path('images') . '/' . $nombreArchivo;
        $archivo->move(public_path('images'), $nombreArchivo);
        $imagen->archivo = 'images/' . $nombreArchivo;
        $imagen->save();

        return redirect()->route('artistas.gestionar')->with('success', 'Imagen guardada exitosamente');
    }
    public function editar(){
        $user = Auth::guard('web')->user();
        $imagenes = $user->imagenes;
        return view('artistas.editar', compact('imagenes'));
    }
    public function borrar(){
        $user = Auth::guard('web')->user();
        $imagenes = $user->imagenes;
        return view('artistas.borrar', compact('imagenes'));
    }

    public function borrarImagen(Request $request){
        $imagenId = $request->input('imagenId');
        
        // Obtener la imagen a eliminar
        $imagen = Imagen::find($imagenId);
        
        // Verificar si la imagen existe y pertenece al usuario autenticado
        if ($imagen && $imagen->artista_id === auth()->user()->id) {
            // Eliminar la imagen del almacenamiento
            Storage::delete('images/' . $imagen->archivo);
            
            // Eliminar la imagen de la base de datos
            $imagen->delete();
            
            return redirect()->back()->with('success', 'La imagen ha sido eliminada correctamente.');
        }
        
        return redirect()->back()->with('error', 'No se pudo eliminar la imagen.');
    }

    public function baneadas(){
        $user = Auth::guard('web')->user();
        $imagenes = $user->imagenes;
        return view('artistas.baneadas', compact('imagenes'));
    }

    public function verArtistas(){
        $usuarios = Cuenta::where('perfil_id', 2)->get();
        $imagenes = Imagen::all();
        return view('artistas.verArtistas', compact('usuarios', 'imagenes'));
    }
}
