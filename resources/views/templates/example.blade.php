@extends('templates.master')

@section('contenido-principal')
<div class="bg-primary p-4 rounded-4 text-info d-flex ">
    form action="{{route('cuentas.store')}}" method="POST">
    @csrf

    <div>
        <label for="nombre">Usuario:</label>
        <input type="text" name="usuario" id="user" required>
    </div>

    <div>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
    </div>
    

    <!-- Otros campos y elementos del formulario -->

    <button type="submit">Crear cuenta</button>
</form>
</div>
@endsection