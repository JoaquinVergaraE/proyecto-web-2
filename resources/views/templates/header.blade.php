<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css\Bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MUSEO DE HISTORIA NATURAL DE VALPARAISO</title>
</head>
<header class="bg-primary d-flex flex-column align-items-center bg-white">
    <div class="container-fluid px-0 mx-0 bg-primary" data-bs-theme="white">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <img src="{{ asset('images/MHNV.png') }}" alt="Descripción de la imagen">
                <div class="ml-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    </form>
                </div>
            </div>
            </div>
        </nav>
    </div>
</div>

<nav class="navbar navbar-expand bg-light justify-content-center">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Qué necesitas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Planifica tu visita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Cartelera</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Colecciones Digitales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Noticias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Exposición Permanente</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Revista Anales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Concurso Innovación</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Multimedia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Preguntas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{route('login')}}">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
</header>
@yield('contenido-principal')  
</html>
