@extends('layouts.base')
@section ('content')

  <form action="/Ingresos/{{$ingreso->id}}"method="POST">
    @csrf
    @method('put')
    <div class="container mt-4">
        <h2>Editar Ingreso de Material</h2>
    
        <form>
          
            <div class="form-group col-6">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad"value="{{$ingreso->cantidad}}">
          </div>

           <div class="form-group col-6">
            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{$ingreso->fecha_ingreso}}">
           </div>

            <div class="form-group col-6">
            <label for="proveedor">Proveedor:</label>
            <input type="text" class="form-control" id="proveedor" name="proveedor" value="{{$ingreso->proveedor}}">
          </div>

          
          <div class="form-group col-6" >
 <label for="material_id"><h5>Nombre del Material:</h5></label>
<select class="form-control" id="material_id" name="material_id" value="{{$ingreso->material_id}}"> 
    @foreach ($material as $material)
    @if($material->id == $ingreso->material_id)
        <option value="{{$material->id}}"selected>{{$material->nombre}}</option>
      @else
     <option value="{{$material->id}}">{{$material->nombre}}</option> 
  @endif
    @endforeach
</select>
                 
</div>
     
 <div class="form-group col-6" >
 <label for="usuario_id"><h5>Nombre del Usuario:</h5></label>
<select class="form-control" id="usuario_id" name="usuario_id" value="{{$ingreso->usuario_id}}"> 
    @foreach ($usuario as $usuario)
    @if($usuario->id == $ingreso->usuario_id)
        <option value="{{$usuario->id}}"selected>{{$usuario->nombre}}</option>
      @else
     <option value="{{$usuario->id}}">{{$usuario->nombre}}</option> 
  @endif
    @endforeach
</select>
                 
</div>



<br>
<a class="btn btn-primary" href="/Ingresos">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection







