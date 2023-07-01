@extends('templates.master')

@section('contenido-principal')

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100" >
    <div class="bg-primary p-4 rounded-4 text-info ">
        <div class="text-center fs-1 fw-semibold">
            @if (auth()->user()->perfil->cuentas->isNotEmpty())
                <h1>Bienvenido, {{ auth()->user()->cuenta}}</h1>
            @else
                <h1>No se encontró una cuenta asociada al perfil.</h1>
            @endif
        </div>
        <div class="list-group">
            <a href="{{route('artistas.listar')}}" class="list-group-item">Listar fotos</a>
            <a href="{{route('artistas.agregar')}}" class="list-group-item">Agregar fotos</a>
            <a href="{{route('artistas.editar')}}" class="list-group-item">Editar fotos</a>
            <a href="{{route('artistas.borrar')}}" class="list-group-item">Borrar fotos</a>
        </div>
</body>
@endsection