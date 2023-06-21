@extends('layouts.base')
@section ('content')

  <form action="/Gestores" method="POST">
    @csrf
    <div class="container mt-3">
        <h5>Crear Gestor</h5>
        <br>
         
          <div class="mb-3">
            <label for="nombre">Nombre  Gestor:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>

           <div class="mb-3">
            <label for="apellido">Apellido  Gestor:</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
          </div>

          <div class="mb-3">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>

           <div class="mb-3">
            <label for="contraseña">Contraseña:</label>
            <input type="text" class="form-control" id="contraseña" name="contraseña">
          </div>

         
     
          <br>
<a class="btn btn-primary" href="/Gestores">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection







