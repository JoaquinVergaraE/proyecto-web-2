@extends('templates.master')

@section('contenido-principal')

    @foreach($perfiles as $perfil)
        <div>{{ $perfil->id }} {{ $perfil->nombre }}</div>
    @endforeach

@endsection