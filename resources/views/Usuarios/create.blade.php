@extends('layouts.base')
@section ('content')

  <form action="/Usuarios" method="POST">
    @csrf
    <div class="container mt-3">
        <h5>Crear Usuario</h5>
        <br>
         
          <div class="mb-3">
            <label for="nombre">Nombre  Usuario:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>

          <div class="mb-3">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>

           <div class="mb-3">
            <label for="telefono">Teléfono:</label>
            <input type="integer" class="form-control" id="telefono" name="telefono">
          </div>

           <div class="mb-3">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
          </div>
          
     
          <br>
<a class="btn btn-primary" href="/Usuarios">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection







