<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cuenta;

class UsuariosController extends Controller
{
    public function autenticar(Request $request)
    {
        $user = $request->user;
        $password = $request->password;
        

        
        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            //$cuenta = Cuenta::where('user', $user)->first();
            //if ($cuenta->perfil_id == 1) {
                //return redirect()->route('administradores.index');
                return view('administradores.index');
            //} elseif ($cuenta->perfil_id == 2) {
            //    return redirect()->route('artistas.index', ['user' => $user]);
            //}
        
        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }

    public function salir(){
        Auth::logout();
        return redirect()->route('login');
    }

    
}
