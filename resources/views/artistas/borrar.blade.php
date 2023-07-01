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
    <div class="card">
        <img src="{{ asset('storage/images/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">
        <form action="{{ route('artistas.borrarImagen', $imagen->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta imagen?')">
            @csrf
            <input type="hidden" name="imagenId" value="{{ $imagen->id }}">
            <div class="card-body">
                <h1 class="card-title">{{ $imagen->titulo }}</h1>
                <div class="d-flex mt-3">
                    <button type="submit" class="btn btn-warning fw-semibold justify-content-center w-100">Borrar</button>
                </div>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection