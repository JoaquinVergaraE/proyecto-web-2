@extends('templates.master')

@section('contenido-principal')
    <div class="d-flex flex-column container bg-primary rounded-4 p-4">
        <div class="d-flex justify-content-center md-48 text-info fw-semibold">
            <span class="material-icons" >&#xf02e;</span>
            
        </div>
        <div class="text-center text-info fs-2 fw-semibold fw-semibold">
            <span>Tipo de perfiles</span>
        </div>
        @foreach($perfiles as $perfil)

        <div class="mt-2">
            <span class="font-weight-bold text-info">id:  
            <span class="badge badge-primary badge-pill bg-info">{{ $perfil->id }}</span>
            <span class="font-weight-bold ml-auto text-info">Nombre:  </span>
            <span class="badge badge-primary badge-pill bg-info">{{ $perfil->nombre }}</span>
        </div>
        <div>
            
        </div>
        

    @endforeach
    </div>
    

@endsection



    