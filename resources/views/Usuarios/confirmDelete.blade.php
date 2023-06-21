@extends('layouts.base')
@section ('content')
¿Desea eliminar el usuario:{{$usuario->nombre}}?
<br>
<br>
<form action="/Usuarios/{{$usuario->id}}"method="POST">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
<a class= "btn btn-primary"href="/Usuarios">Regresar</a>

</form>

@endsection