@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info align-items-center ">
    <div class="d-flex justify-content-center md-48 ">
        
        
    </div>
    <div class="text-center fs-1 fw-semibold">
        Registarse
    </div>

    <form action="{{route('cuentas.store')}}" method="POST">
    @csrf
        <div class="input-group mt-3">
            <div class="input-group-text bg-info">
                <span class="material-icons md-48">&#xe5cc;</span>
            </div>
            <input class="form-control" type="text" name="usuario" id="user" required placeholder="Usuario">
        </div>

        
    
        <div class="input-group mt-3">
            <div class="input-group-text bg-info">
                <span class="material-icons md-48">&#xe5cc;</span>
            </div>
            <input class="form-control" type="text" name="nombre" id="nombre" required placeholder="Nombre">
        </div>
    
        <div class="input-group mt-3">
            <div class="input-group-text bg-info">
                <span class="material-icons md-48">&#xe5cc;</span>
            </div>
            <input class="form-control" type="text" name="apellido" id="apellido" required placeholder="Apellido">
        </div>

        <div class="input-group mt-3 mb-3">
            <div class="input-group-text bg-info">
                <span class="material-icons md-48">&#xe90d;</span>
            </div>
            <input class="form-control" type="password" name="password" id="password" required placeholder="Contraseña">
        </div>

        <!-- Otros campos y elementos del formulario -->
        <div>
            <button type="submit" class="btn btn-info fw-bold justify-content-center w-100 mt-2">Crear cuenta</button>
        </div>
        
    </form>
</div>

@endsection