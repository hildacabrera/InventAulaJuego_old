@extends('layouts.base')
@section('content')

<table class="table table-striped">
    <thead>
<tr>
<th colspan="4">
   <h5><a class= "btn btn" href=><a href="http://localhost/public/libros/create">Agregar Libro</a></a></h5> 
</th>

</tr>

<tr>
    <th>Código</th>
     <th>Título</th>
      <th>Páginas</th>
       <th>ISBN</th>
        <th>Editorial</th>
        <th>Autor</th>
</tr>
    </thead>

<tbody>
@foreach ($libros as $libro )
<tr>
<td>{{ $libro->codigo }}</td>
<td>{{ $libro->titulo }}</td>
<td>{{ $libro->paginas }}</td>
<td>{{ $libro->isbn }}</td>
<td>{{ $libro->editorial }}</td>
<td>{{ $libro->codigoAutor}}</td>
<td> <a class="btn btn-danger" href="/libros/{{ $libro->codigo}}/edit">Editar</a></td>
<td> <a class="btn btn-danger" href="/libros/{{ $libro->codigo}}/confirmDelete">Eliminar</a></td>

</tr>
    
@endforeach
</tbody>
</table>

@endsection('content')