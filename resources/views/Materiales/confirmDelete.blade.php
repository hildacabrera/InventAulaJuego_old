@extends('layouts.base')
@section ('content')
¿Desea eliminar el Material: {{$material->nombre}}?
<br>
<br>
<form action="/Materiales/{{$material->id}}" method="POST">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
<a class= "btn btn-primary"href="/Materiales">Regresar</a>

</form>

@endsection