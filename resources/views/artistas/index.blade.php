<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css\Bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>artistas</title>
</head>
<body class="bg-secondary d-flex justify-content-center align-items-center vh-100" >
    <div class="bg-primary p-4 rounded-4 text-info ">
        <div class="d-flex justify-content-center md-48 ">
            <span class="material-icons" >&#xe3ae;</span>
            
        </div>
        <div class="text-center fs-1 fw-semibold">
            Opciones
        </div>
        <div class="list-group">
            <a href="{{route('artistas.gestionar')}}" class="list-group-item">Gestionar fotos</a>
            <a href="#" class="list-group-item">Ver fotos baneadas</a>
        </div>
</body>