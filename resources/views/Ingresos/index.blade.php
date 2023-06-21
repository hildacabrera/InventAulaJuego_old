@extends('layouts.base')
@section('content')


<table class="table table-striped">
    <thead>
<tr>
  <th colspan="12"> 
 <a class="btn btn-primary" href="/Ingresos/create">Agregar Ingreso de Material</a>
    </th>

</tr>

<tr>
    <th>Código</th>
     <th>Cantidad</th>
      <th>Fecha de Ingreso</th>
       <th>Proveedor</th>
      <th>nombre de Material</th>
       <th>Nombre de Usuario</th>
        <th></th>
        
</tr>
    </thead>

<tbody>
@foreach ($ingreso as $ingreso)
<tr>
<td>{{ $ingreso->id }}</td>
<td>{{ $ingreso->cantidad }}</td>
<td>{{ $ingreso->fecha_ingreso }}</td>
<td>{{ $ingreso->proveedor }}</td>
<td>{{ $ingreso->material_id}}</td>
<td>{{ $ingreso->usuario_id}}</td>
<td><a class="btn btn-primary" href="/Ingresos/{{$ingreso->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Ingresos/{{$ingreso->id}}/confirmDelete"><small>Eliminar</small></a></td>
</tr>

@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection