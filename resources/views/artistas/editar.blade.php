@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48  ">
        <span class="material-icons" >&#xe3ae;</span>
        
    </div>
    <div class="text-center">
        <span>Artista</span>
    </div>
    <div class="text-center fs-1 fw-semibold">
        <h1>{{ auth()->user()->user}} </h1>
    </div>

@foreach($imagenes as $imagen)
    <div class="card">
        <img src="{{ asset('storage/images/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">

        <form action="{{ route('artistas.cambiarTitulo') }}" method="POST">
            @csrf
            <input type="hidden" name="imagenId" value="{{ $imagen->id }}">
            <div class="card-body">
                <h1 class="card-title">{{ $imagen->titulo }}</h1>
                <div class="d-flex mt-3">
                    <input type="text" class="form-control form-control-sm" name="nuevoTitulo" placeholder="Nuevo título" required>
                    <button type="submit" class="btn btn-info fw-semibold justify-content-center w-100">Cambiar título</button>
                </div>
            </div>
        </form>
    </div>
@endforeach
</div>
@endsection