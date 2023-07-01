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

    public function banearImagen(Request $request, $imagenId)
    {
        // Procesar el formulario y actualizar el atributo en la tabla de imágenes
        $imagen = Imagen::find($imagenId);
        $imagen->baneada = true;
        $imagen->motivo_ban = $request->motivo_ban;
        $imagen->save();

        // Redirigir nuevamente a la misma página
        return redirect()->back()->with('success', 'La imagen ha sido baneada exitosamente.');
    }


    public function listar(){
        $perfiles = Perfil::all();
        return view('administradores.listar', compact('perfiles'));
    }
}
