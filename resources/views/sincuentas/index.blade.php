@extends('templates.solo')

@section('contenido-principal')

<div class="row">
    <!-- Mostrar usuarios -->
    @foreach($usuarios as $usuario)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $usuario->nombre }} {{ $usuario->apellido }}</h5>
                <p class="card-text">Perfil: {{ $usuario->perfil_id }}</p>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Mostrar imágenes -->
    @foreach($imagenes as $imagen)
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('storage/images/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">
            <div class="card-body">
                <h5 class="card-title">{{ $imagen->titulo }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection