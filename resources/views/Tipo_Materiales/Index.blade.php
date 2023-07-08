@extends('layouts.base')
@section('content')

@if(isset($error))
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endif

<table class="table table-striped">
    <thead>
<tr>
    <th colspan="4"> 
        <a class="btn btn-primary" href="/Tipo_Materiales/create">Agregar tipo de material</a>
    </th>
    
</tr>

<tr>
    <th>Código</th>
    <th>Tipo de material</th> 
    
</tr>
    </thead>

<tbody>
@foreach($tipo_material as $tipo_material)
<tr>
<td>{{$tipo_material->id}}</td>
<td>{{$tipo_material->nombre}}</td>



<td><a class="btn btn-primary" href="/Tipo_Materiales/{{$tipo_material->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Tipo_Materiales/{{$tipo_material->id}}/confirmDelete"><small>Eliminar</small></a>
</td>
</tr>



@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection