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

    public function banearImagen(Request $request, $id)
    {
        $imagen = Imagen::findOrFail($id);
        if($imagen->baneada != true){
            $imagen->motivo_ban = $request->motivo_ban;
            $imagen->baneada = true;
            $imagen->save();
        }
        else{
            $imagen->motivo_ban = null;
            $imagen->baneada = false;
            $imagen->save();
        }
    
        return redirect()->back()->with('success', 'La imagen ha sido baneada exitosamente.');
    }
    
    public function gestionar(){
        $perfiles = Perfil::all();
        $cuentas = Cuenta::all();
        return view('administradores.gestionar', compact('perfiles', 'cuentas'));
    }
    public function listar(){
        $perfiles = Perfil::all();
        return view('administradores.listar', compact('perfiles'));
    }
}
