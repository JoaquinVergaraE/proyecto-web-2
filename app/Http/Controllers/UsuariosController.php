<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Cuenta;
use App\Models\Imagen;
use App\Models\Perfil;
use Gate;

class UsuariosController extends Controller
{
    public function autenticar(Request $request)
    {
        $user = $request->input('user');
        $password = $request->input('password');
        
        if(Auth::guard('web')->attempt(['user'=>$user,'password'=>$password])){
            $cuenta = Cuenta::where('user', $user)->first();
        
            if ($cuenta->perfil_id == 1) {
                return redirect()->route('administradores.index');
            } elseif ($cuenta->perfil_id == 2) {
                return redirect()->route('artistas.index');
            }
        
        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }

    
}
