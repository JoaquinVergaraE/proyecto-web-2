@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info ">
    <form action="{{ route('artistas.guardarImagen') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mt-2 d-flex container">
            <div class="input-group-text bg-info">
                <span class="material-icons md-48">&#xe161;</span>
            </div>
            <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título">
        </div>
        <div class=" flex container mt-2">
            <input class="form-control form-control-sm bg-secondary" id="imagenn" required name="imagenn" type="file">
        </div>
        <div class="d-flex mt-3">
            <button type="submit" class="btn btn-info fw-semibold justify-content-center w-100">Guardar imagen</button>
        </div>
    </form>
</div>


@endsection

