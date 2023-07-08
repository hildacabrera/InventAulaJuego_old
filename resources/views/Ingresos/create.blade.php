@extends('layouts.base')
@section ('content')

  <form action="/Ingresos" method="POST">
    @csrf
    <div class="container mt-4">
        <h4>Crear Ingreso de Material</h4>
    <br>

        <form>
          
            <div class="form-group col-6">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad">
          </div>

          <div class="form-group col-6">
            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso">
          </div>


          <div class="form-group col-6">
            <label for="proveedor">Proveeedor:</label>
            <input type="text" class="form-control" id="proveedor" name="proveedor">
          </div>


          <div class="form-group col-6" >
 <label for="material_id">Nombre del Material:</label>
<select class="form-control" id="material_id" name="material_id">
    @foreach ($material as $material)
        <option value="{{$material->id}}">{{$material->nombre}}</option>
        
    @endforeach
</select>

                 
</div>

 <div class="form-group col-6" >
 <label for="usuario_id">Nombre del Usuario:</label>
<select class="form-control" id="usuario_id" name="usuario_id">
    @foreach ($usuario as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
        
    @endforeach
</select>

                 
</div>
     
          <br>
<a class="btn btn-primary" href="/Ingresos">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>





@endsection





