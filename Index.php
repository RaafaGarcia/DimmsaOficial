<?php include "./Controlador/Conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>DIMMSA Oficial</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 90vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 120vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 120vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
        
      }
    }

  </style>
</head>

<body>

  <header>
    <section id="home">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar   " >
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="#home" >
          <img src="img/content/LogoAlta .jpg" alt="" width="130">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#empresa" >Empresa</a>
              <!-- target="_blank" -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#productos" >
                Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#contacto" >Contacto</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/dimmsa/" class="nav-link border border-light rounded"
                target="_blank">
                <i class="fab fa-facebook-f"> </i> DIMMSA
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
      <?php 
          $queryCarrusel = "SELECT * FROM carrusel WHERE mostrar = 0 order by(ordenar) asc"; 
          $rsCarrusel = mysqli_query($con, $queryCarrusel) or die ("Error de consulta 1");
          $count = 0;
          while ($Carrusel = mysqli_fetch_array($rsCarrusel)) {

            if($count==0){
              echo "<li data-target='#carousel-example-1z' data-slide-to='$count' class='active'></li>";
            }else{
              echo "<li data-target='#carousel-example-1z' data-slide-to='$count' ></li>";
            }
            $count+=1;
              }
              
              ?>
       
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <?php 
          $queryCarrusel = "SELECT * FROM carrusel WHERE mostrar = 0 order by ordenar asc"; 
          $rsCarrusel = mysqli_query($con, $queryCarrusel) or die ("Error de consulta 2");
          $count=0;
          while ($Carrusel = mysqli_fetch_array($rsCarrusel)) {
            if($count==0){
              ?>
             <div class="carousel-item active ">
            
            <?php
            }else{
            ?>
             <div class="carousel-item ">
            
            <?php
            }
             $route= "'Media/Carrusel/Banner.png'";
             
            echo '
            <div class="view" style="background-image:'; echo "url('Media/Carrusel/$Carrusel[1]');"; echo' background-repeat: no-repeat; background-size: cover">'; 
      ?>
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-end align-items-end ">
              <div class="text-center white-text mx-5 wow fadeIn"  >     
                <h1 class="mb-4">
                  <strong>  <span class="badge badge-pill ambar-color">DIMMSA 2019</span> </strong>
                </h1>
              </div>
            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
          <?php $count +=1;}?>
       

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->
    </section>
  </header>

  <!--Main layout-->
  <main>
    <div class="container">
     
      <!--Section: Main info-->
      <section id="empresa" class="mt-5 wow fadeIn">
        <br>
        <br>
        <!--Grid row-->
        <div class="row mt-5">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="img/content/carrusel1.PNG" class="img-fluid z-depth-1-half" 
              alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">
            <!-- Main heading -->
            <h3 class="h3 mb-3">Diseños Metalicos y de Madera S A de C V</h3>
            <p>Fabricantes de mueble metálico y de madera, con mas de 30 años de experiencia, miembros de la Asociación de
              Fabricantes de Muebles de Jalisco (AFAMJAL).</p>

            <strong>Misión</strong>
            <p>Fabricar muebles con alta tecnología y 100% garantizados para la satisfacción de nuestros clientes.</p>

            <strong>Visión</strong>
            <p>ser proveedores de las más grandes firmas comercializadoras de muebles en el país.</p>
            
            <strong>Valores</strong>
            <p>Confiabilidad, responsabilidad y ética profesional.</p>
            <!-- Main heading -->

          
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <section id="productos">
        <br>
        <br>
          <div class="container " >
            <div style="padding-top:4%" class="sticky-top">
              <nav class="navbar navbar-expand-lg navbar-dark mdb-color sticky-top mb-5 pt-3 " style="border-radius:5px;">

                <!-- Navbar brand -->
                <span class="navbar-brand">Categorías:</span>
        
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
        
                  <!-- Links -->
                  
                    <ul class="nav nav-tabs navbar-nav mr-auto" id="myTab" role="tablist">
                    <li class="nav-item active">
                      <a class="nav-link active" id="todas-tab" data-toggle="tab" href="#todas" role="tab" aria-controls="todas"
                        aria-selected="true">Todos</a>
                    </li>
                    
                    <?php 
                        $queryCategoria = "SELECT * FROM categoria"; 
                        $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta 3");
                        $count1=0;         
                        while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                          echo "
                          <li class='nav-item active'>
                            <a class='nav-link' id='#cat$count1-tab' data-toggle='tab' href='#cat$count1' role='tab' aria-controls='#cat$count1'
                              aria-selected='false'>$Categoria[0]</a>
                          </li>
                          
                          "; 
                          $count1 +=1;}
                    ?>
                  
                    </ul>

                  <!-- Links -->
        
                  <form class="form-inline">
                    <div class="md-form my-0">
                      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
                    </div>
                  </form>
                </div>
                <!-- Collapsible content -->
        
              </nav>
            </div>
            <!--/.Navbar-->
      
            <!--Section: Products v.3-->
            <section class="text-center mb-4">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="todas" role="tabpanel" aria-labelledby="todas-tab">
                    <div class="row">
                   <?php $queryProducto = "SELECT * FROM producto "; 
                            $rsProducto = mysqli_query($con, $queryProducto) or die ("Error de consulta 4");  
                                while ($Producto = mysqli_fetch_array($rsProducto)) {
                                echo "
                                    <div class='col-lg-4 col-md-6 mb-4'>
                          
                                      <div class='card'>
                          
                                        <div class='view overlay'>
                                          <img src='./Media/Productos/$Producto[2]'  class='card-img-top'
                                            alt=''>
                                          <a href='./Producto.php?ref=$Producto[0]'>
                                            <div class='mask rgba-white-slight'></div>
                                          </a>
                                        </div>
                                        
                          
                                        
                                        <div class='card-body text-center'>
                                          
                                          <a href='' class='grey-text'>
                                            <h5>$Producto[1]</h5>
                                          </a>
                                          <h5>
                                            <strong>
                                                <span class='badge p-2 badge-pill mdb-color'>$Producto[7]</span>
                                            </strong>
                                          </h5>
                          
                                         <a href='./Producto.php?ref=$Producto[0]'>
                                          <button type='button' class='btn btn-sm btn-block peach-gradient '  data-toggle='modal' data-target='#$Producto[1]'><b class='h6'>Ver Producto</b></button>
                                          </a>
                          
                                        </div>
                                       
                          
                                      </div>
                                      
                          
                                    </div>

                                  
                                  ";

                                  

                                  }
                                  echo"
                                  </div>
                                  ";
                                
                      ?>
                  </div>
                  <?php $queryCategoria = "SELECT * FROM categoria"; 
                      $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta 5"); 
                      $countCat=0;        
                      while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                        echo"<div class='tab-pane fade show' id='cat$countCat' role='tabpanel' aria-labelledby='cat$countCat-tab'>
                                <div class='row'>
                        "; 
                            $queryProducto = "SELECT * FROM producto WHERE CATEGORIA ='$Categoria[0]'"; 
                            $rsProducto = mysqli_query($con, $queryProducto) or die ("Error de consulta 6");  
                            $count=0;       
                              while ($Producto = mysqli_fetch_array($rsProducto)) {
                                echo "
                                    <div class='col-lg-4 col-md-6 mb-4'>
                          
                                      <div class='card'>
                          
                                        <div class='view overlay'>
                                       
                                          <img src='./Media/Productos/$Producto[2]'  class='card-img-top'
                                            alt=''>
                                        
                                          <a href='./Producto.php?ref=$Producto[0]'>
                                            <div class='mask rgba-white-slight'></div>
                                          </a>
                                        </div>
                                        
                          
                                        
                                        <div class='card-body text-center'>
                                          
                                          <a href='' class='grey-text'>
                                            <h5>$Producto[1]</h5>
                                          </a>
                                          <h5>
                                            <strong>
                                            <span class='badge p-2 badge-pill mdb-color'>$Producto[7]</span>
                                            </strong>
                                          </h5>
                          
                                          <a href='./Producto.php?ref=$Producto[0]'>
                                          <button type='button' class='btn btn-sm btn-block peach-gradient '  data-toggle='modal' data-target='#$Producto[1]'><b class='h6'>Ver Producto</b></button>
                                          </a>
                          
                                        </div>
                                       
                          
                                      </div>
                                      
                          
                                    </div>

                                  
                                  ";

                                  $count += 1;

                                  }
                                  echo"
                                  </div>
                                  </div>";
                                  $countCat +=1;
                                }
                      ?>
                         
              </div>

              <!--Grid row-->
              
              <!--Grid row-->
      
             
      
            </section>
            <!--Section: Products v.3-->
      
            <!--Pagination-->
            <nav class="d-flex justify-content-center wow fadeIn">
              <ul class="pagination pg-blue">
      
                <!--Arrow left-->
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
      
                <li class="page-item active">
                  <a class="page-link" href="#">1
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>
      
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
      
          </div>

          
        </section>

      

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section id="contacto" class="dark-grey-text mb-5">
      
        <style>
          .map-container-section {
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
          }
          .map-container-section iframe {
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
          }
        </style>
    <br>
    <br>
        <!-- Section heading -->
        <h3 class="font-weight-bold text-center mb-4 mt-5">Contacto</h3>
        <!-- Section description -->
        <p  class="text-center w-responsive mx-auto pb-5 h5">¿Tienes preguntas para nosotros?. Escríbe un correo electrónico a nuestro equipo de Soporte Técnico y ellos responderán a la brevedad posible. </p>
         
         
        
 
  
        <!-- Grid row -->
        <div class="row">
  
          <!-- Grid column -->
          <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">
  
            <!-- Form with header -->
            <div class="card">
              <div class="card-body">
                <!-- Header -->
                <div class="form-header  accent-1 p-2" style="text-align:center;color:white;border-radius:5px;background:#929fba">
                  <h3 class="mt-2"><i class="fas fa-envelope"></i> Escribenos</h3>
                </div>
                <p class="dark-grey-text">Te responderemos rapidamente, trata de ser claro </p>
                <!-- Body -->
              <form action='./Controlador/mail.php' method='post'>
              <div>
                <div class="md-form">
                  <i class="fas fa-user prefix grey-text"></i>
                  <input type="text" name="name" class="form-control" required>
                  <label for="form-name">Nombre </label>
                </div>
                <div class="md-form">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input type="email" name="email" class="form-control" required>
                  <label for="form-email">E-mail</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-tag prefix grey-text"></i>
                  <input type="text" name="Subject" class="form-control" required>
                  <label for="form-Subject">Asunto</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-pencil-alt prefix grey-text"></i>
                  <textarea name="text" class="form-control md-textarea" rows="3" required></textarea>
                  <label for="form-text">Escribe tu mensaje</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn " style="color:white;background:#929fba">Enviar</button>
                </div>
              </div>
              </form>
              </div>
            </div>
            <!-- Form with header -->
  
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-lg-7">
  
            <!--Google map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.895951383908!2d-103.36858018578314!3d20.633097486213924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ad8eeebf9abb%3A0xb1aeacf37dda188e!2sDimmsa!5e0!3m2!1ses!2smx!4v1575579208320!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <!-- Buttons-->
            <div class="row text-center">
              <div class="col-md-4">
                <a class="btn-floating  accent-1" style="border-radius:25px;background:#929fba">
                  <i class="fas fa-map-marker-alt p-2" style="color:white"></i>
                </a>
                <p>Calle Palma Sola 1115 Zona Industrial 44940 Guadalajara, Jal.</p>
              </div>
              <div class="col-md-4">
                <a class="btn-floating  accent-1" style="border-radius:25px;background:#929fba">
                  <i class="fas fa-phone p-2" style="color:white"></i>
                </a>
                <p>01 (33) 3645-5843/ 36639276</p>
              </div>
              <div class="col-md-4">
                <a class="btn-floating  accent-1" style="border-radius:25px;background:#929fba">
                  <i class="fas fa-envelope p-2" style="color:white"></i>
                </a>
                <p>direccion@mueblesdimmsa.com</p>
              </div>
            </div>
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->
  
      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: Not enough-->
      
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <!-- <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"
        role="button">Download MDB
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
        free tutorial
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div> -->
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/dimmsa/" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://viisoft.firebaseapp.com/" target="_blank"> ViiSoft.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
