@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48 ">
        <span class="material-icons" >&#xe3ae;</span>
        
    </div>
    <div class="text-center fs-1 fw-semibold">
        Opciones
    </div>
    <div class="list-group">
        <a href="{{route('artistas.gestionar')}}" class="list-group-item">Gestionar fotos</a>
        <a href="#" class="list-group-item">Ver fotos baneadas</a>
    </div>
@endsection