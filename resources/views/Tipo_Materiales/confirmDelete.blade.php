@extends('layouts.base')
@section ('content')
¿Desea eliminar el Tipo de Material:{{$tipo_material->nombre}}?
<br>
<br>
<form action="/Tipo_Materiales/{{$tipo_material->id}}"method="POST">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
<a class= "btn btn-primary"href="/Tipo_Materiales">Regresar</a>

</form>

@endsection