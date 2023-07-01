<form action="{{ route('artistas.guardarImagen') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" required>
    </div>
    <div>
        <label for="archivo">Seleccionar archivo:</label>
        <input type="file" name="imagenn" id="imagenn" required>
    </div>
    <div>
        <button type="submit">Guardar imagen</button>
    </div>
</form>
