@extends('layouts.base')
@section ('content')

  <form action="/Tipo_Materiales/{{$tipo_material->id}}"method="POST">
    @csrf
    @method('put')
    <div class="container mt-4">
        <h5>Editar Tipo de Material</h5>
    
        <form>
          
          <div class="form-group col-6">
            <label for="nombre">Tipo de Material:</label>
            <input type="text"id="nombre" name="nombre"value="{{$tipo_material->nombre}}">
    
          </div>
<a class="btn btn-primary" href="/Tipo_Materiales">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>



@endsection







