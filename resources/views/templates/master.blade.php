<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css\Bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
</head>

<body class="bg-secondary d-flex vh-100 flex-column align-items-center" >
    <div class="container-fluid px-0 mx-0 bg-primary" data-bs-theme="dark"   >
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a href="{{route('usuarios.salir')}}" class="text-decoration-non text-info fw-semibold fst-italic">Cerrar Sesión</a>
        </div>
      </nav>
    </div>
    
    <div class="d-flex justify-content-center mt-5">
        @yield('contenido-principal')
    </div>
    
</body>
</html>