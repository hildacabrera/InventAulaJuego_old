@extends('layouts.base')
@section ('content')
¿Desea eliminar el Gestor: <br> {{$gestor->nombre}}?
<br>
<br>
<form action="/Gestores/{{$gestor->id}}"method="POST">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
<a class= "btn btn-primary"href="/Gestores">Regresar</a>

</form>

@endsection