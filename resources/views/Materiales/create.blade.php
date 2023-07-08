@extends('layouts.base')
@section ('content')
@if ($errors != null && $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            
        </ul>
    </div>
    @endif

  <form action="/Materiales" method="POST">
    @csrf
    <div class="container mt-4">
        <h4>Crear Material</h4>
    <br>

        <form>
          
          <div class="form-group col-6">
            <label for="nombre">Nombre del material:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="form-group col-6">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
          </div>
          <div class="form-group col-6" >
 <label for="tipo_material_id">Tipo de Material:</label>
<select class="form-control" id="tipo_material_id" name="tipo_material_id">
    @foreach ($tipo_material as $tipo_material)
        <option value="{{$tipo_material->id}}">{{$tipo_material->nombre}}</option>
        
    @endforeach
</select>

                 
</div>
     
          <br>
<a class="btn btn-primary" href="/Materiales">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>





@endsection







