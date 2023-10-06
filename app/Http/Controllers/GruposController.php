<?php

namespace App\Http\Controllers;
use App\Models\Grupo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GruposController extends Controller
{
    public function index(){
        $grupos = Grupo::all();
        return view('grupos.index', compact('grupos'));
    }

    public function agregar(){
    $grupos = Grupo::all();
    return view('grupos.agregar', compact('grupos'));
    }

    public function agregarGrupos(Request $request){
        $rules = [
            'cod_grupo' => 'required|numeric|unique:grupos',
            'cod_institucion' => 'required|exists:instituciones,cod_institucion',
            'rut_encargado' => 'required|exists:encargados,rut_encargado',
            'cantidad_niños' => 'required|numeric|min:1|max:20',
            'cantidad_niñas' => 'required|numeric|min:1|max:20',
            'cantidad_adultos' => 'required|numeric|min:1|max:20',
            'cantidad_adultas' => 'required|numeric|min:1|max:20',
        ];

        $messages = [
            'cod_grupo.unique' => 'El código de grupo ya existe en la base de datos.',
            'cod_institucion.exists' => 'El código de institución no existe en la base de datos.',
            'rut_encargado.exists' => 'El rut del encargado no existe en la base de datos.',
            'cantidad_niños.max' => 'La cantidad de niños no puede superar 20.',
            'cantidad_niñas.max' => 'La cantidad de niñas no puede superar 20.',
            'cantidad_adultos.max' => 'La cantidad de adultos no puede superar 20.',
            'cantidad_adultas.max' => 'La cantidad de adultas no puede superar 20.',
        ];

        $request->validate($rules, $messages);
    
        $grupo = new Grupo();
        $grupo->cod_grupo = $request->input('cod_curso');
        $grupo->cod_institucion = $request->input('cod_institucion');
        $grupo->rut_encargado = $request->input('rut_encargado');
        $grupo->cantidad_niños = $request->input('cantidad_niños');
        $grupo->cantidad_niñas = $request->input('cantidad_niñas');
        $grupo->cantidad_adultos = $request->input('cantidad_adultos');
        $grupo->cantidad_adultas = $request->input('cantidad_adultas');
    

        $grupo->save();
    
        return redirect()->route('grupos.agregar')->with('success', 'Grupo guardado exitosamente');
    }
    
    public function modificar($cod_grupo, $cod_institucion) {

        $cod_grupo = strval($cod_grupo);
        $cod_institucion = strval($cod_institucion);
    

        $grupo = Grupo::where('cod_grupo', $cod_institucion)
            ->where('cod_institucion', $cod_institucion)
            ->first(); 
    
        if ($grupo) {
            return view('grupos.modificar', compact('grupo'));
        } else {

        }
    }
    
    public function modificarGrupos(Request $request){
        $rules = [
            'cod_grupo' => 'required|numeric|unique:grupos',
            'cod_institucion' => 'required|exists:instituciones,cod_institucion',
            'rut_encargado' => 'required|exists:encargados,rut_encargado',
            'cantidad_niños' => 'required|numeric|min:1|max:20',
            'cantidad_niñas' => 'required|numeric|min:1|max:20',
            'cantidad_adultos' => 'required|numeric|min:1|max:20',
            'cantidad_adultas' => 'required|numeric|min:1|max:20',
        ];

        $messages = [
            'cod_grupo.unique' => 'El código de grupo ya existe en la base de datos.',
            'cod_institucion.exists' => 'El código de institución no existe en la base de datos.',
            'rut_encargado.exists' => 'El rut del encargado no existe en la base de datos.',
            'cantidad_niños.max' => 'La cantidad de niños no puede superar 20.',
            'cantidad_niñas.max' => 'La cantidad de niñas no puede superar 20.',
            'cantidad_adultos.max' => 'La cantidad de adultos no puede superar 20.',
            'cantidad_adultas.max' => 'La cantidad de adultas no puede superar 20.',
        ];

        $request->validate($rules, $messages);
        return view('administradores.index')->with('success', 'Grupo guardado exitosamente');
    }
}
