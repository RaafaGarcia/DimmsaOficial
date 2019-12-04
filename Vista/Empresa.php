<?php include "../Controlador/Conexion.php"; ?>
<!DOCTYPE html>
<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="../Vista/Img/favicon.png" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<head>
	<title>Dimmsa | Empresa</title>
</head>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="../Index.php">
    <img src="img/LogoAlta.jpg" alt="Dimmsa" style="width:120px;">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="Empresa.php">Empresa</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="Productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="Contacto.php">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<body style="background-image: url(img/bg.jpg); color: white;" >    
	
	<section>
    <br><br><br>
  	<div class="container" style="text-align: center; background-color:  rgba(0,0,0,0.8); border-radius: 15px; " >
    <br>
      <h1 class="intro-text name" >Nosotros</h1>
      
      <div class="row">
        <div class="col-lg-4 col-sm-12 col-md-6" style="content: center; ">
          <br>
          <br>
        <h2 style="text-align: center;"> Somos fabricantes de mueble metálico y de madera, con mas de 30 años de experiencia, Somos miembros de la Asociación de
          Fabricantes de Muebles de Jalisco (AFAMJAL). </h2>
        </div>
        <div class="col-lg-8 col-sm-12 col-md-6" >
          <br>
          <br>
          <img class="img-responsive img-thumbnail" src="img/empresa.jpg">
        </div>
        <br>
      

      <!--Mision -->
      <div class="col-lg-12 col-sm-12 col-md-12" >
      <br>
          <h1><img src="img/mision.png" style="width: 60px;height: 60px;">
        Misión:</h1>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12" >
        <h3>Nuestra Misión es Fabricar muebles con alta tecnología y 100% garantizados para la satisfacción de nuestros clientes.</h3>
      </div>
      <!--Vision -->
      <div class="col-lg-12 col-sm-12 col-md-12" >
      <br>
          <h1><img src="img/vision.png" style="width: 60px;height: 60px;">
        Visión:</h1>
      </div>
      <div class="col-lg-12 col-sm-12 col-md-12" >
        <h3>Nuestra Visión es la de ser proveedores de las más grandes firmas comercializadoras de muebles en el país.</h3>
      </div>
      <!--Objetivos u otros -->
      <div class="col-lg-12 col-sm-12 col-md-12" >
      <br>
          <h1><img src="img/valores.png" style="width: 60px;height: 60px;">
        Valores:</h1>
      </div>
        <div class="col-lg-12 col-sm-12 col-md-12" >
        <h3>Confiabilidad, responsabilidad y ética profesional.</h3>
      </div>
    </div>
    </div>
    <br>
    <br>
	</section>
<style>
.footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: black; color: white; text-align: center;}
</style>

    <div class="text-center footer" style="background-color: black;" style="color: white;">
  <div class="footer-above">
    <a href="#"><img src="img/up.png" title="Ir arriba" style="position: fixed; bottom: 10px; right: 2%;" /></a>
  </div>
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