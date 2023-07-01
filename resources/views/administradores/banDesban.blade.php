@extends('templates.master')

@section('contenido-principal')


<div class="accordion container mb-4" id="propuestas-accordion">
    @foreach($cuentas as $cuenta)
        <div class="card">
            <div class="list-group-item">
                <div class="row">
                    <div class="col col-4 offset-4">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{ $cuenta->user }}" aria-expanded="true" aria-controls="collapse-{{ $cuenta->user }}">
                                 Cuenta de usuario {{ $cuenta->user }} | Nombre: {{ $cuenta->nombre }}
                            </button>
                        </h2>
                    </div>
                </div>                     
            </div>
        </div>
    @endforeach
</div>

@endsection