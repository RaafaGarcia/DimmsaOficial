<?php include "./Controlador/Conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php
  $id=$_GET['ref'];
  echo"<title>Producto | $id </title>";
  ?>
  
  <link rel="icon" type="image/png" href="favicon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar   " >
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="./#home" >
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
              <a class="nav-link" href="./#home">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./#empresa" >Empresa</a>
              <!-- target="_blank" -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./#productos" >
                Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="./#contacto" >Contacto</a>
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

  <!--Main layout-->
  <main class="p-1 m-2">
    <div class=" dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn p-4">
      <?php 
        $id=$_GET['ref'];
        $queryDetalle = "SELECT * FROM producto WHERE ID_PRODUCTO=$id"; 
        $rsDetalle = mysqli_query($con, $queryDetalle) or die ("Error de consulta");         
              while ($Detalle = mysqli_fetch_array($rsDetalle)) {
                
                echo '<div class="col-md-6 mb-4">';
                echo '';
                echo "<img src='./Media/Productos/$Detalle[2]' style='border-radius:10px;width: 950px; height: 700px;' class='img-fluid' alt=''> ";
                echo '';
                echo '</div>';
                echo '<!--Grid column-->';
                echo '';
                echo '<!--Grid column-->';
                echo '<div class="col-md-6 mb-4">';

                echo '<form class="text-left  " action="#!">';
                echo "<div class='peach-gradient pt-3 pb-1  text-center' style='border-radius:10px'><p class='h4 mb-4'>$Detalle[1]</p></div>";
                echo '';
                echo '';
                echo '<p class="h5 p-1 m-1" style="color:green">Disponible </p>';
                echo '<h5>';
                echo '<strong>';
                echo "<span class='badge m-1 p-2 badge-pill mdb-color'>$Detalle[7]</span>";
                echo '</strong>';
                echo '</h5>';
                echo '';
                echo '<p class="h6 p-1 m-1">Referencia: </p>';
                echo '';
                echo "<img class='img-responsive center-block img-thumbnail m-1'  src='./Media/Referencias/$Detalle[3]' style='width: 250px; height: 180px;'>";
                echo '<hr>';
                echo '<p class="h6 p-1 m-1">Materiales: </p>';
                echo '';
                echo "<p class='text-left p-3 m-1'>$Detalle[4]</p>";
                echo '<hr>';
                echo '<p class="h6 p-1 m-1">Colores: </p>';
                echo '';
                echo "<p class='text-left p-3 m-1'>$Detalle[5]</p>";
                echo '<hr>';
                echo '<p class="h6 p-1 m-1">Medidas: </p>';
                echo '';
                echo "<p class='text-left p-3 m-1'>$Detalle[6]</p>";
                echo '<a href="./#contacto">';
                echo '<span class="btn btn-info btn-block" > <i class="fas fa-envelope fa-lg"> </i> <span class="h6"> Contactanos</span></span>';
                echo '</a>';
                echo '';
                echo '</form>';
                echo '</div>';

              }
            ?>
        <!--Grid column-->
        
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>
      

      <!--Grid row-->
      
      <!--Grid row-->

      <!--Grid row-->
      
      <!--Grid row-->

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
