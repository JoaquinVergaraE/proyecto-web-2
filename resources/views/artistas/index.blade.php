@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48 ">
        <span class="material-icons" >&#xe3ae;</span>
        
    </div>
    <div class="text-center">
        <span>Artista</span>
    </div>
    <div class="text-center fs-1 fw-semibold">
        <h1>{{ auth()->user()->user}} </h1>
    </div>
    <div class="list-group d-flex flex-column pb-2 text-center">
        <div class="rounded-3">
            <a href="{{route('artistas.gestionar')}}" class="list-group-item text-decoration-non fw-semibold fst-italic bg-info text-light " style="font-size:0.9rem; border: 1px solid black;">Gestionar fotos</a>
        </div>
        <div class="rounded-3 mt-3">
            <a href="{{route('artistas.baneadas')}}" class="list-group-item text-decoration-non fw-semibold fst-italic bg-info text-light " style="font-size:0.9rem; border: 1px solid black;">Ver fotos baneadas</a>
        </div>
    </div>
@endsection

