<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Material</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
      <div class="container-fluid">
        <img
        src="https://www.iudigital.edu.co/Style%20Library/images/logo-escudo.png"
        height="60"
        alt="MDB Logo"
        loading="lazy"
      />
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Material</a>
        <a class="nav-link" href="{{url('libros')}}">Entradas Material</a>
        <a class="nav-link" href="#">Salidas Material</a>
        <a class="nav-link" href="#">Usuarios</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Préstamo</a>   
  <br>
      </div>
    </div>
  </div>
  
</nav>
<H3>Inventario Aula del Juego</H3> 
<div class="container-fluid"><hr>
@yield('content')
</div>

</body>
</html>