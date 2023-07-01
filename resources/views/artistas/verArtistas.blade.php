@extends('templates.master')
@section('contenido-principal')

<div class="bg-primary p-4 rounded-4 text-info ">
    <div class="d-flex justify-content-center md-48  ">
        <span class="material-icons" >&#xe3ae;</span>
        <div class="row">
            <div class="col-md-12">
                <h3>Lista de artistas registrados</h3>
            </div>
            <div class="col-md-12">
                <div id="accordion">
                    @foreach($usuarios as $usuario)
                    <div class="card">
                        <div class="card-header" id="heading{{ $usuario->id }}">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $usuario->nombre }}" aria-expanded="true" aria-controls="collapse{{ $usuario->nombre }}">
                                    Usuario: {{ $usuario->user }}
                                </button>
                            </h2>
                        </div>
                        <div id="collapse{{ $usuario->nombre }}" class="collapse" aria-labelledby="heading{{ $usuario->nombre }}" data-parent="#accordion">
                            <div class="card-body">
                                <h4>Imágenes de {{ $usuario->nombre }} {{ $usuario->apellido }}</h4>
                                <div class="row">
                                    @foreach($usuario->imagenes as $imagen)
                                    @if(!$imagen->baneada)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="{{ asset('/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $imagen->titulo }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection