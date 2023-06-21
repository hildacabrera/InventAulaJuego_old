@extends('layouts.base')
@section('content')
           
            <div id="white" class="col-1">
            </div>
        <div class="row">
        <div class="col-sm-1">
  </div>
            <div id = "white" class="col-5" >

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://www.iudigital.edu.co/Centro-de-Recursos-para-el-Aprendizaje-y-la-Investigacion-CRAI/PublishingImages/Micrositio/Carousel/25112021_carrusel_crai_1.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.iudigital.edu.co/CRAI/SliderHomeCrai/buscar%20en%20BD.png" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.iudigital.edu.co/Centro-de-Recursos-para-el-Aprendizaje-y-la-Investigacion-CRAI/PublishingImages/Micrositio/Carousel/4.4.png" class="d-block w-100" alt="Imagen 3">
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
<br>

                <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Bases de Datos Multidisciplinarias</h5>
                        <p class="card-text">EBSCO Open Dissertations: EBSCO Open Dissertations incluye el contenido de American Doctoral Dissertations, la cual es una base de datos gratuita con registros de más de 1.2 millones de tesis y disertaciones electrónicas de todo el mundo.</p>
                        <a href="EBSCO Open Dissertations: EBSCO Open Dissertations incluye el contenido de American Doctoral Dissertations, la cual es una base de datos gratuita con registros de más de 1.2 millones de tesis y disertaciones electrónicas de todo el mundo." class="btn btn-primary">Ver más</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Recursos educativos digitales e interactivos</h5>
                        <p class="card-text">Transmedialiteracy: Educación y tecnologías de la información</p>
                        <a href="https://transmedialiteracy.org/" class="btn btn-primary">Ver más</a>
                      </div>
                    </div>
                  </div>
                </div>
                
            </div>
            
            <div id="white" class="col-1">
            </div>
            <br>
            <div id="white" class="col-5">
              <div class="card" style="width: 20rem;">
                <img src="https://www.iudigital.edu.co/CRAI/SliderHomeCrai/nuevos%20libros.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Acerca del Aula del Juego</h5>
                  <p class="card-text">Sisema de Inventarios que permite la administración de Alula del Juego</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Materiales</li>
                  <li class="list-group-item">Cursos</li>
                  <li class="list-group-item">Talleres</li>
                </ul>
                <div class="card-body">
                  <a href="https://www.iudigital.edu.co/CRAI/Paginas/default.aspx" class="card-link">CRAI</a>
                  <a href="https://www.iudigital.edu.co/CRAI/Paginas/default.aspx" class="card-link">Bases de Datos</a>
                </div>
              </div>
            </div>
        </div>
        
        <div>

        </div>
            <div id="white" class="col-3">
            </div>
            <div id= "white"class="col-1">
            </div>


 @endsection('content')