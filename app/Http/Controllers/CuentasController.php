<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;

class CuentasController extends Controller
{
    public function index(){
        return view('cuentas.index');
    }

    public function store(Request $request){
        $cuenta = new Cuenta();
        $cuenta->user = $request->usuario;
        $cuenta->password = Hash::make($request->password);
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->perfil_id = 2;
        $cuenta->save();
        return redirect()->route('login')->with('success', 'Cuenta creada exitosamente');
    }
}
