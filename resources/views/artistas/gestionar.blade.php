@extends('templates.master')

@section('contenido-principal')

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100" >
    <div class="bg-primary p-4 rounded-4 text-info ">
        <div class="text-center fs-1 fw-semibold">
            <h1>Bienvenido, Usuario: {{ auth()->user()->user}} </h1>
        </div>
        <div class="list-group">
            <a href="{{route('artistas.listar')}}" class="list-group-item">Listar fotos</a>
            <a href="{{route('artistas.agregar')}}" class="list-group-item">Agregar fotos</a>
            <a href="{{route('artistas.editar')}}" class="list-group-item">Editar fotos</a>
            <a href="{{route('artistas.borrar')}}" class="list-group-item">Borrar fotos</a>
        </div>
</body>
@endsection