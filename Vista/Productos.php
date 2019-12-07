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
	<title>Dimmsa | Productos</title>
</head>

	<header>
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
        <a class="nav-link" href="Empresa.php">Empresa</a>
      </li>
      <li class="nav-item active">
        <a  class="nav-link" href="Productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="Contacto.php">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
</header>

<body style="background-image: url(../Vista/Img/bg.jpg)" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
        <br>
        <br>
        <br>
        <div class="container" style="text-align: center; background-color:  rgba(0,0,0,0.8); border-radius: 15px;">

            <div class="container">
                <br>
                <div class="row">
                    <nav class="col-sm-2 col-3" id="myScrollspy" style="position: fixed;">
                        <ul class="nav nav-pills flex-column">
                            <?php 
                                $queryCategoria = "SELECT * FROM CATEGORIA"; 
                                $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");         
                                while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                                  echo "
                                  <li class='nav-item' style='background-color: #cf6f19; border-radius: 3px;'>
                                    <a style='color: white;' class='nav-link' href='#$Categoria[0]'><b> $Categoria[0]</b></a>
                                  </li>
                                  <br>"; }
                            ?>
                          </ul>
                    </nav>
                      <div class=" offset-2 col-sm-10 col-9 ">

                    <?php $queryCategoria = "SELECT * FROM CATEGORIA"; 
                      $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");         
                      while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                        echo"
                      <div id='$Categoria[0]' class='bg-basic'>
                      <h1 style='color: white;'>$Categoria[0]</h1>
                      <div class='row'>"; 
                      $queryProducto = "SELECT * FROM PRODUCTO WHERE CATEGORIA ='$Categoria[0]'"; 
                          $rsProducto = mysqli_query($con, $queryProducto) or die ("Error de consulta");         
                            while ($Producto = mysqli_fetch_array($rsProducto)) {
                              echo "
                              <div style='background-color: white; margin: 0 auto; border-radius: 5px; margin-top: 7px; margin-bottom: 7px; box-shadow: 8px 8px 4px #000000' class=' col-lg-5'>
                              <br>
                              <h5>$Producto[1]</h5>
                              <img class='img-responsive center-block img-thumbnail'  src='../Media/$Producto[1].jpg' style='width: 320px; height: 280px;'>
                              <br> 
                              <button type='button' class='btn btn-sm btn-block' style='background-color: #cf6f19; color: white;' data-toggle='modal' data-target='#$Producto[1]'><b>Detalles</b></button>
                              <br>     
                              </div>";}
                              echo"
                              </div>
                              </div>";
                      }?>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <br>
  

<?php 
  $queryDetalle = "SELECT * FROM PRODUCTO"; 
  $rsDetalle = mysqli_query($con, $queryDetalle) or die ("Error de consulta");         
    while ($Detalle = mysqli_fetch_array($rsDetalle)) {
echo"
<div class='container-fluid'> 
  <!-- The Modal -->
  <div class='modal fade' id='$Detalle[1]'>
    <div class='modal-dialog  modal-lg'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header'>
        <div class='container-fluid'> 
        <div class='row'> 
        <div class='col-12'>
        <div class='row align-items-center'> 
        <div class='col-11'>
          <h4 class='modal-title'>$Detalle[1]</h4>
        </div>
        <div class='col-1'>   
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        </div>
        <br>    
        <div class='col-12'>
        <div class='row align-items-start'> 
        <div class='col-12'> 
          <img class='img-responsive center-block img-thumbnail'  src='../Media/$Detalle[1].jpg' style='width: 950px; height: 700px;'>
          </div> 
          <div class='col-12'>
          <div class='row align-items-start'> 
          <div class='col-3'>
          <h5>Referencia</h5>
          <img class='img-responsive center-block img-thumbnail'  src='../Vista/Img/$Detalle[2].png' style='width: 250px; height: 180px;'>
          </div>
          <div class='col-3'>
          <h5>Materiales</h5>
          <p>";
          echo nl2br($Detalle[3]);
          echo"
          </p>
          </div> 
          <div class='col-3'>
          <h5>Colores</h5>
          <p>";
          echo nl2br($Detalle[4]);
          echo"
          </p>
          </div> 
          <div class='col-3'>
          <h5> Medidas</h5>
          <p>";
          echo nl2br($Detalle[5]);
          echo"
          </p>
          </div> 
          </div>
          </div> 
          </div>    
            </div>
            </div>         
        </div>
        </div>
      </div>
    </div>
  </div>
  </div> ";}
  ?>

<style>
.footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: black; color: white; text-align: center;}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #000000;
    border-color: #cf6f19;
    border-style: solid;
}

.modal-lg {
    max-width: 80% !important;
}
</style>

    <div class="text-center footer" style="background-color: #343a40;" style="color: white;">
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
    </div>

</body>
</html>