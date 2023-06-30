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
<body class="bg-secondary d-flex justify-content-center align-items-center vh-100" >
    <div class="bg-primary p-4 rounded-4 text-info ">
        <div class="d-flex justify-content-center md-48 ">
            <span class="material-icons" >&#xe3ae;</span>
            
        </div>
        <div class="text-center fs-1 fw-semibold">
            login
        </div>
        <!-- OJO NO TOCAR LO SIGUIENTE -->
        <form action="{{ route('usuarios.autenticar') }}" method="POST">
        @csrf
            <div class="input-group mt-2">
                <div class="input-group-text bg-info">
                    <span class="material-icons md-48">&#xe853;</span>
                </div>
                <input class="form-control" type="text" name="user" placeholder="Usuario">
            </div>
            <div class="input-group mt-3 pb-1">
                <div class="input-group-text bg-info">
                    <span class="material-icons md-48">&#xe897;</span>
                </div>
                <input class="form-control" type="password" name="password" placeholder="Contraseña">
            </div>
            <div class="d-flex flex-column pb-2 text-center">
                <div>
                    <a href="{{ route('cuentas.index') }}" class="text-decoration-non text-info fw-semibold fst-italic" style="font-size:0.9rem">Crear cuenta artista</a>
                </div>
                <div>
                    <a href="#" class="text-decoration-non text-info fw-semibold fst-italic" style="font-size:0.9rem">Ver fotos</a>
                </div>
            </div>
             <button type="submit" class="btn btn-info fw-bold justify-content-center w-100">Login</button> <!-- Cambiamos el <div> por un <button> y agregamos el atributo type="submit" -->
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>