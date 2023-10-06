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
        <title>ADMINISTRADOR MUSEO DE HISTORIA NATURAL DE VALPARAISO</title>
    </head>

    <header class="align-items-center bg-white mb-3">
        <div class="bg-primary" data-bs-theme="white">
            <nav class="navbar bg-body-tertiary">
                    <img src="{{ asset('images/MHNV.png') }}" alt="Descripción de la imagen">
                    <div class="container text-center mt-3">
                        <a href="{{route('main')}}" class="btn btn-danger fw-bold">Cerrar Sesion</a>
                    </div>
                    <a href="{{route('administradores.index')}}" class="btn btn-info fw-bold">Volver Atrás</a>
                </div>
                </div>
            </nav>
        </div>
    </header>
    <body>
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
                        <th class="table-light">accion</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($grupos as $grupo)
                        <tr>
                            <td>{{ $grupo->cod_grupo }}</td>
                            <td>{{ $grupo->cod_institucion }}</td>
                            <td>{{ $grupo->rut_encargado }}</td>
                            <td>{{ $grupo->cantidad_niños }}</td>
                            <td>{{ $grupo->cantidad_niñas }}</td>
                            <td>{{ $grupo->cantidad_adultos }}</td>
                            <td>{{ $grupo->cantidad_adultas }}</td>
                            <td class="table-danger">
                                <a href="" class="btn btn-danger btn-sm" title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                </a>
<a href="{{ route('grupos.modificar', ['cod_grupo' => $grupo->cod_grupo, 'cod_institucion' => $grupo->cod_institucion]) }}" class="btn btn-primary btn-sm" title="Modificar">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    
                </tbody>       
                    
            </table>
        </div>
        <div class="container text-center mt-3">
            <!-- Botón de Agregar debajo de la columna "Acción" -->
            <a href="{{ route('grupos.agregar') }}" class="btn btn-success btn-sm" title="Agregar">
                <i class="fas fa-plus"></i> Agregar
            </a>
        </div>
    </body>