<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css\Bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fotos</title>
</head>
<body class="bg-secondary d-flex vh-100 flex-column align-items-center" >
    <div class="container-fluid px-0 mx-0 bg-primary" data-bs-theme="dark"   >
        <nav class="navbar navbar-expand-lg  bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="navbar-brand" href="{{ route('login') }}">Home</a>
                  <form action="/logout" method="POST">
                    @csrf
                    <a class="nav-link" href="#">Cerrar Sesión</a>
                  </form>
                  <a class="nav-link disabled">Disabled</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
    
    <div class="d-flex justify-content-center mt-5">
        @yield('contenido-principal')
    </div>
    
</body>
</html>