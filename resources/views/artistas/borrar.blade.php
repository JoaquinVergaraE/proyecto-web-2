@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48  ">
        <span class="material-icons">&#xe3ae;</span>
    </div>
    <div class="text-center">
        <span>Artista</span>
    </div>
    <div class="text-center fs-1 fw-semibold">
        <h1>{{ auth()->user()->user }}</h1>
    </div>

    @foreach($imagenes as $imagen)
    <div class="container mb-3">
        <h1>Titulo: {{ $imagen->titulo }}</h1>
        <div class="card card-sm">
            <img src="{{ asset('/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">
            <div class="card-body">
                <form action="{{ route('artistas.borrarImagen', $imagen->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta imagen?')">
                    @csrf
                    <input type="hidden" name="imagenId" value="{{ $imagen->id }}">
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </div>
        </div>
    </div>
@endforeach


</div>
@endsection
