@extends('templates.master')

@section('contenido-principal')
    <div class="d-flex flex-column container bg-primary rounded-4 p-4">
        <div class="d-flex justify-content-center md-48 text-info fw-semibold">
            <span class="material-icons">&#xf02e;</span>
        </div>
        <div class="text-center text-info fs-2 fw-semibold">
            <span>Tipo de perfiles</span>
        </div>
        @foreach($perfiles as $perfil)
        <div class="mt-4">
            <span class="font-weight-bold text-info">ID: </span>
            <span class="badge badge-primary badge-pill bg-info">{{ $perfil->id }}</span>
            <span class="font-weight-bold ml-auto text-info">Perfil: </span>
            <span class="badge badge-primary badge-pill bg-info">{{ $perfil->nombre }}</span>
        </div>
        <div class="mt-2">
            <span class="font-weight-bold text-info">Usuarios:</span>
            <ul class="list-group mt-2">
                @foreach($perfil->cuentas as $cuenta)
                <li class="list-group-item">
                    <form action="{{ route('eliminar.usuario', ['user' => $cuenta->user]) }}" method="POST" onsubmit="return confirm('¿Estás seguro que quieres eliminar este usuario?')">
                        @csrf
                        {{ $cuenta->user }}
                    <button type="submit" class="btn btn-danger btn-sm" {{ $perfil->id == 1 ? 'disabled' : '' }}>Eliminar usuario</button>
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
@endsection
