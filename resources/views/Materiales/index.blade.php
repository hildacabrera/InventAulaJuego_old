@extends('layouts.base')
@section('content')

@if(isset($error))
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endif

<table class="table table-striped" class="container mt-4">
    <thead>
<tr>
  <th colspan="9"> 
 <a class="btn btn-primary" href="/Materiales/create">Agregar Material</a>
    </th>

</tr>

<tr>
    <th>Código</th>
     <th>Nombre del material</th>
      <th>Descripción</th>
       <th>Tipo de Material</th>
        <th></th>
        
</tr>
    </thead>

<tbody>
@foreach ($material as $material )
<tr>
<td>{{ $material->id }}</td>
<td>{{ $material->nombre }}</td>
<td>{{ $material->descripcion }}</td>
<td>{{ $material->tipo_material_nombre}}</td>
<td><a class="btn btn-primary" href="/Materiales/{{$material->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Materiales/{{$material->id}}/confirmDelete"><small>Eliminar</small></a></td>
</tr>

@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection