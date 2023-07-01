@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48">
        <span class="material-icons">&#xe3ae;</span>
    </div>
    <div class="text-center">
        <span>Artista</span>
    </div>
    <div class="text-center fs-1 fw-semibold">
        <h1>{{ auth()->user()->user}}</h1>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            @foreach($imagenes as $imagen)
            @if($imagen->baneada)
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Baneada la foto de titulo: "{{ $imagen->titulo }}"</h4>
                <p>Razón de baneo: {{ $imagen->motivo_ban }}</p>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
