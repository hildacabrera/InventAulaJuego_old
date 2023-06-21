<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <title><INVENTARIO AULA DEL JUEGO)</title>
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
        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        <a class="nav-link" href="{{url('Materiales')}}">Materiales</a>
        <a class="nav-link" href="{{url('Tipo_Materiales')}}">Tipo Material</a>
        <a class="nav-link" href="{{url('Ingresos')}}">Ingresos</a>
        <a class="nav-link" href="{{url('Usuarios')}}">Usuarios</a>
        <a class="nav-link" href="{{url('Gestores')}}">Gestores</a>
        <a class="nav-link" href="#">Préstamos</a>   
  <br>
      </div>
    </div>
  </div>
  
</nav>
<center><H2>AULA DEL JUEGO</H2><h5>Inventario</h5></center> 
<div class="container-fluid"><hr>


@yield('content')
</div>

</body>

<footer class="bg-light text-center text-white">

  <!-- Grid container -->
  <div style="">
  <div class="container p-4 pb-0" >
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/soyiudigital"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="https://twitter.com/IUDIGITAL"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="https://www.linkedin.com/company/unavailable/"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://www.instagram.com/iudigital/"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
    </section>
    <!-- Section: Social media -->
  </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://www.iudigital.edu.co/Paginas/default.aspx">IUDigital de Antioquia</a>
  </div>
  <!-- Copyright -->
</footer>

</html>