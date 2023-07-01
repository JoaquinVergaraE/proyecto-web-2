@extends('templates.master')

@section('contenido-principal')

    @foreach($imagenes as $imagen)
    <div class="card">
        <img src="{{ asset('storage/images/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">

        <div class="card-body">
            <h5 class="card-title">{{ $imagen->titulo }}</h5>
            <p class="card-text">{{ $imagen->cuenta_user }} {{ $imagen->cuenta_user }}</p>
        </div>
    </div>
@endforeach


@endsection