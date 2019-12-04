<?php  include "./Controlador/Conexion.php"; ?>
<!DOCTYPE html>
<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="Vista/Img/favicon.png" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<head>
	<title>Dimmsa | Inicio</title>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style> 
</head>

	<header>
	 <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="Index.php">
    <img src="Vista/img/LogoAlta.jpg" alt="Dimmsa" style="width:120px;">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Vista/Empresa.php">Empresa</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="Vista/Productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="Vista/Contacto.php">Contacto</a>
      </li>
    </ul>
  </div>
</nav>

           
	</header>
<body style="background-image: url(Vista/img/bg.jpg)" >  
<section>
<br><br><br>
  <div class="container"  style="text-align: center; background-color:  rgba(0,0,0,0.8); border-radius: 15px;">
    <br>
  	<div id="demo" class="carousel slide" data-ride="carousel">
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/Carrusel/Banner.png" class="img-thumbnail" style="width: 1100px; height: 500px;">
    </div>

    <div class="carousel-item">
      <img src="media/Carrusel/Antecomedor Hermes Completo.jpg" class="img-thumbnail" style="width: 1100px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img src="media/Carrusel/Antecomedor Renata.jpg" class="img-thumbnail" style="width: 1100px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img src="media/Carrusel/Antecomedor Fiona.jpg" class="img-thumbnail" style="width: 1100px; height: 500px;">
    </div>

  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon" ></span>
  </a>
</div>
<br>
</div>
<br>
</section>
<br>
<style>
.footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: black; color: white; text-align: center;}
</style>

    <div class="text-center footer" style="background-color: #343a40;" style="color: white;">
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" style="color: white;">
              Copyright &copy; <?php echo date ("Y"); ?> DIMMSA&nbsp;|<a href="">&nbsp;Términos y condiciones</a> 
          </div>
        </div>
    </div>
  </div>
    </div>
</body>
</html>