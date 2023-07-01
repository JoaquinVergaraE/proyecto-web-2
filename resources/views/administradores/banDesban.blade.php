@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48  ">
        <span class="material-icons" >&#xe3ae;</span>
        
    </div>
    <div class="text-center">
        <span>Administrador</span>
    </div>
    <div class="text-center fs-1 fw-semibold">
        <h1>{{ auth()->user()->user}} </h1>
    </div>
<div class="row">
    <div class="col-md-12">
        <ul class="list-group">
            @foreach($cuentas as $cuenta)
                <li class="list-group-item">
                    <h4>Nombre de usuario: {{ $cuenta->user }}</h4>
                    <ul class="list-group">
                        @foreach($cuenta->imagenes as $imagen)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5>Titulo de la imagen: {{ $imagen->titulo }}</h5>
                                </div>
                                <div class="col-md-4">
                                    @if($imagen->baneada)
                                    <form action="{{ route('administradores.banearImagen', ['id' => $imagen->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro que quieres desbanear esta imagen?')">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" enabled>Desbanear</button>
                                    </form>
                                    @else
                                    <form action="{{ route('administradores.banearImagen', ['id' => $imagen->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro que quieres banear esta imagen?')">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg ms-auto @if($errors->has('motivo_ban')) is-invalid @endif" name="motivo_ban" placeholder="Razón de ban" required>
                                            <button type="submit" class="btn btn-success btn-sm">Banear</button>
                                            @if($errors->has('motivo_ban'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('motivo_ban') }}
                                            </div>
                                            @endif
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
@endsection
