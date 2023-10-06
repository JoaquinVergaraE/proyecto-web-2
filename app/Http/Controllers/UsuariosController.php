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
        
    
    if ($user === 'admin' && $password === '123') {

        return redirect()->route('administradores.index');
    } else {

        return back()->withErrors('Credenciales incorrectas');
    }
        /*
        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            $cuenta = Cuenta::where('user', $user)->first();
            if ($cuenta->perfil_id == 1) {
                return redirect()->route('administradores.index');
                return view('administradores.index');
            } elseif ($cuenta->perfil_id == 2) {
                return redirect()->route('artistas.index');
            }
        
        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
        */
    }

    public function salir(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function eliminarUsuario($user)
    {
        $cuenta = Cuenta::find($user);
        $cuenta->delete();
        return redirect()->back()->with('success', 'Usuario eliminado correctamente.');
    }
    
}
