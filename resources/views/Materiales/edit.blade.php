@extends('layouts.base')
@section ('content')

  <form action="/Materiales/{{$material->id}}"method="POST">
    @csrf
    @method('put')
    <div class="container mt-4">
        <h2>Editar Material</h2>
    
        <form>
          
          <div class="form-group col-6">
            <label for="nombre">Nombre del Material:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$material->nombre}}">
          </div>
          <div class="form-group col-6">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion"value="{{$material->descripcion}}">
          </div>
          
          <div class="form-group col-6" >
 <label for="tipo_material_id"><h5>Nombre del Material:</h5></label>
<select class="form-control" id="tipo_material_id" name="tipo_material_id" value="{{$material->tipo_material_id}}"> 
    @foreach ($tipo_material as $tipo_material)
    @if($tipo_material->id == $material->tipo_material_id)
        <option value="{{$tipo_material->id}}"selected>{{$tipo_material->nombre}}</option>
      @else
     <option value="{{$tipo_material->id}}">{{$tipo_material->nombre}}</option> 
  @endif
    @endforeach
</select>
                 
</div>
     
<br>
<a class="btn btn-primary" href="/Materiales">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection







