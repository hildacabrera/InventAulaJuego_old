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
        <a class="btn btn-primary" href="/Gestores/create">Agregar Gestor</a>
    </th>
    
</tr>

<tr>
    <th>Código</th>
    <th>Nombre Gestor</th> 
    <th>Apellido Gestor</th>
    <th>E-mail</th> 
    <th>Contraseña</th>
 
</tr>
    </thead>

<tbody>
@foreach($gestor as $gestor)
<tr>
<td>{{$gestor->id}}</td>
<td>{{$gestor->nombre}}</td>
<td>{{$gestor->apellido}}</td>
<td>{{$gestor->email}}</td>
<td>{{$gestor->contraseña}}</td>



<td><a class="btn btn-primary" href="/Gestores/{{$gestor->id}}/edit"><small>Modificar</small></a>
  <a class="btn btn-danger" href="/Gestores/{{$gestor->id}}/confirmDelete"><small>Eliminar</small></a>
</td>
</tr>



@endforeach
</tbody>
</table>
<br>
<br>
<br>


@endsection