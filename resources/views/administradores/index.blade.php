<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css\Bootstrap-custom.min.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMINISTRADOR MUSEO DE HISTORIA NATURAL DE VALPARAISO</title>
    </head>

    <header class="align-items-center bg-white mb-3">
        <div class="bg-primary" data-bs-theme="white">
            <nav class="navbar bg-body-tertiary">
                    <img src="{{ asset('images/MHNV.png') }}" alt="Descripción de la imagen">
                    <div class="container text-center mt-3">
                        <a href="{{route('main')}}" class="btn btn-danger fw-bold">Cerrar Sesion</a>
                    </div>
                </div>
                </div>
            </nav>
        </div>
    </div>
    </header>

    <body class= "container-flex bg-white">
        <div class= "container-flex bg-light">
            <div class="row text-center text-primary text-info fw-semibold">
                <h5>Seleccione la tabla a administrar</h5>
            <div class="row text-center text-primary text-info fw-semibold">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-light text-primary text-info|">
                            <a href="{{ route('grupos.index') }}">
                                <img src="{{ asset('images/grupo.jpg') }}" class="card-img-top" alt="Grupo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-light">
                            <a href="#">
                                <img src="{{ asset('images/institucion.jpg') }}" class="card-img-top" alt="Institucion">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-light">
                            <a href="#">
                            <img src="{{ asset('images/encargado.jpg') }}" class="card-img-top" alt="Encargado">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-light">
                            <a href="#">
                            <img src="{{ asset('images/reserva.jpg') }}" class="card-img-top" alt="Reserva">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-light">
                            <a href="#">
                            <img src="{{ asset('images/actividad.jpg') }}" class="card-img-top" alt="Actividad">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-light">
                            <a href="#">
                            <img src="{{ asset('images/bloque.jpg') }}" class="card-img-top" alt="Bloque">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-light">
                            <a href="#">
                            <img src="{{ asset('images/guia.jpg') }}" class="card-img-top" alt="Guia">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
