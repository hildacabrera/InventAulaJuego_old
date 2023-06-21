@extends('layouts.base')
@section ('content')

  <form action="/Usuarios" method="POST">
    @csrf
    @method('put')
    <div class="container mt-3">
        <h5>Crear Usuario</h5>
        <br>
         
          <div class="mb-3">
            <label for="nombre">Nombre  Usuario:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$usuario->nombre}}">
          </div>

          <div class="mb-3">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$usuario->email}}">
          </div>

           <div class="mb-3">
            <label for="telefono">Teléfono:</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="{{$usuario->telefono}}">
          </div>

           <div class="mb-3">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{$usuario->direccion}}">
          </div>
          
     
          <br>
<a class="btn btn-primary" href="/Usuarios">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection

