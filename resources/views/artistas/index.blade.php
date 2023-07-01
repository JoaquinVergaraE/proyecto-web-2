@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48 ">
        <span class="material-icons" >&#xe40a;</span>
        
    </div>
    <div class="text-center fs-1 fw-semibold">
        Opciones
    </div>
    <div class="list-group d-flex flex-column pb-2 text-center">
        <a href="{{route('artistas.gestionar')}}" class="list-group-item text-decoration-non text-info fw-semibold fst-italic" style="font-size:0.9rem">Gestionar fotos</a>
        <a href="#" class="list-group-item text-decoration-non text-info fw-semibold fst-italic" style="font-size:0.9rem">Ver fotos baneadas</a>
    </div>
@endsection

