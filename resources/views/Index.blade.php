<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

@extends('layouts.base')
@section('content')
       

            
            <div id="white" class="col-1">
            </div>
        <div class="row">
        <div class="col-sm-1">
  </div>
            <div id = "white" class="col-5" >
                <br>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://www.iudigital.edu.co/IU-Digital-Abierta/PublishingImages/17092021_IUDigital_Abierta_600x500.png" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                      <img src="https://i.ytimg.com/vi/zNvQ1KnhbjY/maxresdefault.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                      <img src="https://i.ytimg.com/vi/ZPUh1KX1NXk/maxresdefault.jpg" class="d-block w-100" alt="Imagen 3">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                  </a>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            </div>
            
            <div id="white" class="col-1">
            </div>
            <div id="white" class="col-4">
                
              <div class="container">
                <div class="row">
            
                  <!-- Tarjeta 1 -->
                  <div class="col-sm-6 col-md-6">
                    <div class="card">
                      <img src="https://pequenosplanes.com/wp-content/uploads/2017/05/IMG_20170523_171538.jpg" class="card-img-top" alt="Imagen 1">
                      <div class="card-body">
                        <h5 class="card-title">Bloques Lógicos</h5>
                      </div>
                    </div>
                  </div>
            
                  <!-- Tarjeta 2 -->
                  <div class="col-sm-6 col-md-6">
                    <div class="card">
                      <img src="https://cdn-gacmo.nitrocdn.com/sSOLxWvOlYaiqbbjsnRQuNEmMrtIasaC/assets/images/optimized/rev-57ec7fb/wp-content/uploads/2018/08/sudoku_multicolor.jpg" class="card-img-top" alt="Imagen 2">
                      <div class="card-body">
                        <h5 class="card-title">Sudoku</h5>
      
                      </div>
                    </div>
                  </div>
            
                  <!-- Tarjeta 3 -->
                  <div class="col-sm-6 col-md-6">
                    <div class="card">
                      <img src="https://cdn-gacmo.nitrocdn.com/sSOLxWvOlYaiqbbjsnRQuNEmMrtIasaC/assets/images/optimized/rev-57ec7fb/wp-content/uploads/2018/08/goula_tangram.jpg" class="card-img-top" alt="Imagen 3">
                      <div class="card-body">
                        <h5 class="card-title">Tangram</h5>
                      </div>             
                    </div>
                  </div>

                  <!-- Tarjeta 3 -->
                  <div class="col-sm-6 col-md-6">
                    <div class="card">
                      <img src="https://cdn-gacmo.nitrocdn.com/sSOLxWvOlYaiqbbjsnRQuNEmMrtIasaC/assets/images/optimized/rev-57ec7fb/wp-content/uploads/2018/08/rompecabezas_matematico.jpg" class="card-img-top" alt="Imagen 3">
                      <div class="card-body">
                        <h5 class="card-title">Rompecabezas</h5>
                      </div>             
                    </div>
                  </div>
                        
                </div>
              </div>
            </div>
            <div id= "white"class="col-1">
            </div>
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

 @endsection('content')
