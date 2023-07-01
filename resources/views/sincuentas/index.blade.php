@extends('templates.solo')

@section('contenido-principal')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<div class="row">
    <!-- Mostrar usuarios -->
    <div class="col-md-12">
        <h3>Usuarios</h3>
    </div>
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            @foreach($usuarios as $usuario)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#usuario{{ $usuario->id }}">{{ $usuario->nombre }} {{ $usuario->apellido }}</a>
            </li>
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach($usuarios as $usuario)
            <div class="tab-pane fade" id="usuario{{ $usuario->id }}">
                <h4>Imágenes de {{ $usuario->nombre }} {{ $usuario->apellido }}</h4>
                <div class="row">
                    @foreach($usuario->imagenes as $imagen)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/images/' . $imagen->archivo) }}" class="card-img-top" alt="Imagen">
                            <div class="card-body">
                                <h5 class="card-title">{{ $imagen->titulo }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

