@extends('templates.solo')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info align-items-center ">
    <div class="d-flex justify-content-center md-48 ">
        <span class="material-icons" >&#xef3d;</span>
        
    </div>
    <div class="text-center fs-1 fw-semibold">
        login
    </div>
    <!-- OJO NO TOCAR LO SIGUIENTE -->
    <form method="POST" action="{{ route('usuarios.autenticar') }}">
    @csrf
        <div class="input-group mt-2">
            <div class="input-group-text bg-info">
                <span class="material-icons md-48">&#xe853;</span>
            </div>
            <input class="form-control" type="text" name="user" placeholder="Usuario">
        </div>
        <div class="input-group mt-3 pb-1">
            <div class="input-group-text bg-info">
                <span class="material-icons md-48">&#xe897;</span>
            </div>
            <input class="form-control" type="password" name="password" placeholder="Contraseña">
        </div>
        <div class="d-flex flex-column pb-2 text-center">
            <div>
                <a href="{{ route('cuentas.index') }}" class="text-decoration-non text-info fw-semibold fst-italic" style="font-size:0.9rem">Crear cuenta artista</a>
            </div>
            <div>
                <a href="{{ route ('sincuentas.index')}}" class="text-decoration-non text-info fw-semibold fst-italic" style="font-size:0.9rem">Ver fotos</a>
            </div>
        </div>
         <button type="submit" class="btn btn-info fw-bold justify-content-center w-100">Login</button>
    </form>
</div>
@endsection