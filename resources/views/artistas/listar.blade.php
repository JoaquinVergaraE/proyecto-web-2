@extends('templates.volverGes')

@section('contenido-principal')

    @foreach($imagenes as $imagen)
    <div class="card">
        <img src="{{ asset('storage/images/'. $imagen->archivo)}}" class="card-img-top" alt="Imagen">

        <div class="card-body text-center">
            <h5 class="card-title">{{ $imagen->titulo }}</h5>
            <p class="card-text">{{ $imagen->cuenta_user }}</p>
        </div>
    </div>
@endforeach


@endsection