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
    @if(!$imagen->baneada)     
        <div class="card">
            <img src="{{ asset('/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">
            <div class="card-body">
                <h1 class="card-title">Título: {{ $imagen->titulo }}</h1>
                <p class="card-text">Id de la imagen: {{ $imagen->id }}</p>
                <p class="card-text">Autor: {{ $imagen->cuenta_user }}</p>
            </div>
        </div>
    @endif
@endforeach
</div>
@endsection