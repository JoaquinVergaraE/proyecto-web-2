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
    <header class="align-items-center bg-white">
        <div class="bg-primary" data-bs-theme="white">
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

    <nav class="container-fluid navbar navbar-expand bg-light justify-content-center">
                        <div class="container-fluid justify-content-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">Qué necesitas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{route('main')}}">Planifica tu visita</a>
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

    <body class="bg-white text-info align-items-center ">
        <div class="container-fluid d-flex mt-4 mb-4 bg-white justify-content-center ">
            <div class="bg-light text-center p-5 rounded-1 fw-semibold">
            <span class="material-icons" >&#xef3d;</span>    
            LOGIN
        <!-- OJO NO TOCAR LO SIGUIENTE -->
        <form method="POST" action="{{ route('usuarios.autenticar') }}">
            @csrf
            <div class="input-group mt-2 bg-light">
                <div class="input-group-text bg-info">
                    <span class="material-icons md-48">&#xe853;</span>
                </div>
                <input class="form-control" type="text" name="user" placeholder="Usuario">
            </div>
            <div class="input-group mt-3 pb-3">
                <div class="input-group-text bg-info">
                    <span class="material-icons md-48">&#xe897;</span>
                </div>
                <input class="form-control" type="password" name="password" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-info fw-bold justify-content-center w-100">Login</button>
        </form>
        </div>
        </div>
    </body>

<footer class="bg-light text-info pt-4 pb-4">
    <div class="d-flex justify-content-center ">
        <!-- Div para centrar la imagen -->
        <div class="d-flex align-items-center ">
            <img src="{{ asset('images/Footer.png') }}" alt="Descripción de la imagen" class="img-fluid">
        <!-- Div para el contenido de la columna -->
        <div class="column-footer text-white">
            <ul>
                <li><i class="fa fa-envelope"></i> Dirección: Condell 1546, Valparaíso, Chile.</li>
                <li><i class="fa fa-phone"></i> Tel: +56322175380 | E-mail: mhnv@museoschile.gob.cl</li>
                <li><i class="fa fa-map-marker"></i> Atención Ciudadana | Términos y condiciones de uso</li>
                <li> Servicio Nacional del Patrimonio Cultural</li>
            </ul>
        </div>
    </div>
</footer>

</html>

