@extends('layouts.base')
@section('content')

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Lista de Préstamo Personal</title>
</head>
<body>

<form id = "formPrestamo" ="{{ route('consultarPrestamos') }}" method="POST">
        @csrf
  <div class="container col-12">
    <div id="dropdown" >
        <h5>Buscar Préstamos por Gestor</h5>
        <select name="persona" class="form-control" onchange="this.form.submit()">
            <option value="">Selecciona un Gestor</option>
            @foreach($superPantalla['ListaUsuarios'] as $usuario)
                <option value="{{ $usuario->id }}" @if($usuario->id == $superPantalla['ValorUsuario']) selected @endif>{{ $usuario->nombre }}</option>
            @endforeach
        </select>
        <br>
    </div>
    </form>
    <div id="grillaPrestamo">
    <table class="table table-striped" style="width: 100%; margin: 0px auto; text-align: center">
      <thead>
          <tr>
              <td>
                  <b>Material</b> 
              </td>
              <td>
                  <b>Descripción</b> 
              </td>
              <td>
                <b>Cantidad</b> 
            </td> 
              <td>
                  <b>Fecha Préstamo</b> 
              </td> 
              <td>
                  <b>Acción</b> 
              </td> 
          </tr>
      </thead>
  <tbody>
    @if(count($superPantalla['ListaPrestamoPersonal']) > 0)
      @foreach ($superPantalla['ListaPrestamoPersonal'] as $item)
      <tr>
          <td>
              {{ $item->nombre }}
          </td>
          <td>
              {{ $item->descripcion }}
          </td>
          <td>
              {{ $item->cantidad }}
          </td>
          <td>
              {{ $item->fecha_prestamo}}
          </td>
          
          <td>
            <a onclick="submitFormDevolver(event, {{ $item->id }})" class="btn btn-warning"><small>Devolver</small></a>
          </td>
       
      @endforeach
      @endif
  
  </tbody>
  </table>
</div>

    <form id = "formPrestamo" ="{{ route('consultarPrestamos') }}" method="POST">
        @csrf
  <div class="container col-12">
    <div id="dropdown" >
        <h5>Buscar Préstamos por Usuario</h5>
        <select name="persona" class="form-control" onchange="this.form.submit()">
            <option value="">Selecciona un usuario</option>
            @foreach($superPantalla['ListaUsuarios'] as $usuario)
                <option value="{{ $usuario->id }}" @if($usuario->id == $superPantalla['ValorUsuario']) selected @endif>{{ $usuario->nombre }}</option>
            @endforeach
        </select>
        <br>
    </div>
    </form>
    <div id="grillaPrestamo">
    <table class="table table-striped" style="width: 100%; margin: 0px auto; text-align: center">
      <thead>
          <tr>
              <td>
                  <b>Material</b> 
              </td>
              <td>
                  <b>Descripción</b> 
              </td>
              <td>
                <b>Cantidad</b> 
            </td> 
              <td>
                  <b>Fecha Préstamo</b> 
              </td> 
              <td>
                  <b>Acción</b> 
              </td> 
          </tr>
      </thead>
  <tbody>
    @if(count($superPantalla['ListaPrestamoPersonal']) > 0)
      @foreach ($superPantalla['ListaPrestamoPersonal'] as $item)
      <tr>
          <td>
              {{ $item->nombre }}
          </td>
          <td>
              {{ $item->descripcion }}
          </td>
          <td>
              {{ $item->cantidad }}
          </td>
          <td>
              {{ $item->fecha_prestamo}}
          </td>
          
          <td>
            <a onclick="submitFormDevolver(event, {{ $item->id }})" class="btn btn-warning"><small>Devolver</small></a>
          </td>
       
      @endforeach
      @endif
  
  </tbody>
  </table>
</div>
<br>
<br> 
<div id="dropdown" >
  <h5>Buscar por Material</h5>
  <select name="material" class="form-control" onchange="this.form.submit()">
      <option value="">Selecciona material</option>
      @foreach($superPantalla['ListaMaterial'] as $material)
          <option value="{{ $material->id }}" @if($material->id == $superPantalla['ValorMaterial']) selected @endif>{{ $material->nombre}}</option>
   
      @endforeach
  </select>
  <br>
</div>
<div id="grillaPrestamo">
<table class="table table-striped" style="width: 100%; margin: 0px auto; text-align: center">
  <thead>
      <tr>
          <td>
              <b>Material</b> 
          </td>
          <td>
              <b>Descripción</b> 
          </td>
          <td>
            <b>Fecha Ingreso</b> 
        </td>
          <td>
              <b>Cantidad</b> 
          </td>
          <td>
              <b>Acción</b> 
          </td> 
      </tr>
  </thead>
<tbody>
  @if(count($superPantalla['ListaMaterialesStock']) > 0)
  @foreach ($superPantalla['ListaMaterialesStock'] as $item)
  <tr>
      <td>
          {{ $item->nombre }}
      </td>
      <td>
          {{ $item->descripcion }}
      </td>
      <td>
        {{ $item->fecha_ingreso }}
    </td>
      <td>
          {{ $item->cantidad }}
      </td>
      <td>
        <a class="btn btn-success" onclick="submitFormPrestar(event, {{ $item->id }})"><small>Prestar</small></a>
    </td>
   
  @endforeach
@endif
</tbody>
</table>
</div> 

<input name = "idDevolver" type="hidden" />
<input name = "idPrestar" type="hidden"/>
<input name = "idAccion" type="hidden"/>
</form>
<script>
    function submitFormDevolver(event, idDevolver){
        var form = document.getElementById('formPrestamo');
        document.querySelector('[name="idDevolver"]').value=idDevolver;
        document.querySelector('[name="idAccion"]').value="Devolver";
        form.submit();
     
    }
    function submitFormPrestar(event, idPrestar){
        var form = document.getElementById('formPrestamo');
        document.querySelector('[name="idPrestar"]').value=idPrestar;
        document.querySelector('[name="idAccion"]').value="Prestar";
        form.submit();
    }
</script>
</body>
</html>
</body>
</html>
@endsection('content')