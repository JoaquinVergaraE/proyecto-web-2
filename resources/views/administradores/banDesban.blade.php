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
                                <button class="btn btn-danger btn-sm" disabled>Desbanear</button>
                                @else
                                <form action="/banear-imagen/{{ $imagen->id }}" method="POST" onsubmit="return confirm('¿Estas seguro que quieres banear esta imagen?')">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" name="motivo_ban" placeholder="Razón de ban" required>
                                        <button type="submit" class="btn btn-success btn-sm">Banear</button>
                                    </div>
                                </form>
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
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@endsection
