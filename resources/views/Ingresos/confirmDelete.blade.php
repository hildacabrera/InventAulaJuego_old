@extends('layouts.base')
@section ('content')
¿Desea eliminar el Ingreso de Material: {{$ingreso->cantidad}}?
<br>
<br>
<form action="/Ingresos/{{$ingreso->id}}" method="POST">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger">Eliminar</button>
<a class= "btn btn-primary"href="/Ingresos">Regresar</a>

</form>

@endsection