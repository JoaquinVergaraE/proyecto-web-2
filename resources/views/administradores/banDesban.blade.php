@extends('templates.solo')

@section('contenido-principal')

<div class="row">
    <div class="col-md-12">
        <ul class="list-group">
            @foreach($cuentas as $cuenta)
            <li class="list-group-item">
                <h4>{{ $cuenta->user }}</h4>
                <ul class="list-group">
                    @foreach($cuenta->imagenes as $imagen)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>{{ $imagen->titulo }}</h5>
                            </div>
                            <div class="col-md-4">
                                @if($imagen->baneada)
                                <button class="btn btn-danger btn-sm" onclick="desbanearImagen({{ $imagen->id }})">Desbanear</button>
                                @else
                                <button class="btn btn-success btn-sm" onclick="banearImagen({{ $imagen->id }})">Banear</button>
                                @endif
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection