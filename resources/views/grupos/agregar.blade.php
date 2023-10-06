<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css\Bootstrap-custom.min.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AGREGAR GRUPO MUSEO DE HISTORIA NATURAL DE VALPARAISO</title>
    </head>

    <header class="align-items-center bg-white mb-3">
        <div class="bg-primary" data-bs-theme="white">
            <nav class="navbar bg-body-tertiary">
                    <img src="{{ asset('images/MHNV.png') }}" alt="Descripción de la imagen">
                    <div class="container text-center mt-3">
                        <a href="{{route('administradores.listar')}}" class="btn btn-danger fw-bold">Cerrar Sesion</a>
                    </div>
                    <a href="{{route('grupos.index')}}" class="btn btn-info fw-bold">Volver Atrás</a>
                </div>
                </div>
            </nav>
        </div>
    </header>
    <body>
        <form action="{{ route('grupos.agregarGrupos') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-flex">      
                <table class="table">
                    <thead class="table-light text-center">
                        <tr>
                            <th>cod_grupo</th>
                            <th>cod_institucion</th>
                            <th>rut_encargado</th>
                            <th>cantidad_niños</th>
                            <th>cantidad_niñas</th>
                            <th>cantidad_adultos</th>
                            <th>cantidad_adultas</th>
                        </tr>
                    </thead>
                        <tbody class="text-center">
                            <tr>
                                <td><input type="text" name="cod_grupo" class="form-control"required></td>
                                <td><input type="text" name="cod_institucion" class="form-control"required></td>
                                <td><input type="text" name="rut_encargado" class="form-control"required></td>
                                <td><input type="text" name="cantidad_niños" class="form-control"required></td>
                                <td><input type="text" name="cantidad_niñas" class="form-control"required></td>
                                <td><input type="text" name="cantidad_adultos" class="form-control"required></td>
                                <td><input type="text" name="cantidad_adultas" class="form-control"required></td>
                            </tr>
                        </tbody>      
                </table>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="container text-center mt-3">
                <button type="submit" class="btn btn-success btn-sm" title="Agregar">
                    <i class="fas fa-plus"></i> Agregar
                </a>
            </div>
        </form>
    </body>