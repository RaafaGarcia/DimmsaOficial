<?php  ini_set("default_charset", "utf-8"); header("Content-Type: text/html;charset=utf-8"); 
include "../Controlador/Conexion.php"; 

?>
<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/font.css">
    <!-- font-family: 'Roboto Condensed', sans-serif; -->
    <!-- font-family: 'Open Sans', sans-serif; -->
    <!-- font-family: 'Nunito', sans-serif; -->
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- toast -->
<link rel="stylesheet" href="../Controlador/toastr.min.css">
<script src="../Controlador/toastr.min.js"></script>

<head>
	<title>Dimmsa | Inventario</title>
</head>
<body>
	<header>
	 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	<a class="navbar-brand" href="Index.php">
        			<img class="img-responsive" style="height: 25px; align-content: center;" href="Index.php" src="img/LogoAlta.jpg" alt="Dimmsa">
      			</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
                </button>	
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li class="page"><a href="Empresa.php">Empresa</a></li>
                    <li class="page"><a href="Productos.php">Productos</a></li>
                  <?php if (!isset($_SESSION["user_id"])) { ?>
                    <li class="page"><a href="Login.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Login</a></li> 
                  <?php }else{ if ($_SESSION['user_id']==1) { ?>
                    <li class="page active"><a href="Inventario.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Inventario</a></li>
                    <li class="page"><a href="Pedidos.php"><span class="glyphicon glyphicon-send"></span>&nbsp;Pedidos</a></li>
                    <li class="page"><a href="Ventas.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Ventas</a></li>  
                    <li class="page"><a href="Cerrar.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Salir</a></li> 
                  <?php }elseif ($_SESSION['user_id']>=2) { ?>
                    <li class="page"><a href="Contacto.php">Contactanos</a></li> 
                    <li class="page"><a href="Cuenta.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;Configuración</a></li>
                    <li class="page"><a href="Carrito.php"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito</a></li>
                    <li class="page"><a href="Pedidos.php"><span class="glyphicon glyphicon-send"></span>&nbsp;Pedidos</a></li> 
                    <li class="page"><a href="Cerrar.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Salir</a></li>
                  <?php } } ?>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	</header>
	<section>
<br>

<script>

toastr["success"]("Se actualizo el usuario", "Aviso");
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "2000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>

    <div class="container" style="text-align: center;" >
      <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
      <h1 class="intro-text name" >Inventario</h1>
      <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
		
    <ul class="nav nav-tabs nav-justified" style="text-align: center;">
      <li class="active"><a data-toggle="pill" href="#home" style="background-color:  #f0ad4e; color: white;">Agregar Producto</a></li>
      <li><a data-toggle="pill" href="#menu1" style="background-color:  #f0ad4e; color: white;">Comedores</a></li>
      <li><a data-toggle="pill" href="#menu2" style="background-color:  #f0ad4e; color: white;">Sillas y Sillones</a></li>
      <li><a data-toggle="pill" href="#menu3" style="background-color:  #f0ad4e; color: white;">Bancos</a></li>
      <li><a data-toggle="pill" href="#menu4" style="background-color:  #f0ad4e; color: white;">Mesas de Centro</a></li>
      <li><a data-toggle="pill" href="#menu5" style="background-color:  #f0ad4e; color: white;">Percheros</a></li>
    </ul>
    <br>
    
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="background-color: #f0ad4e;">
          <h2 style="color: white;"><span class='glyphicon glyphicon-open' ></span>&nbsp;Agregar Producto</h2>
        </div>
        <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6" style="background-color: #f0ad4e; text-align: left;">  
          <form role="form" action="Pro.php" method="post" class="login-form">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" placeholder="Nombre" class="form-username form-control" id="Nombre" required="yes">
            <label for="Descripcion">Descripción:</label>
            <input type="text" name="Descripcion" placeholder="Descripción" class="form-username form-control" id="Descripcion" required="yes">
            <label for="Precio">Precio:</label>
            <input type="text" name="Precio" placeholder="Precio" class="form-username form-control" id="Precio" required="yes">
            <label for="Cantidad">Cantidad:</label>
            <input type="number" min="1" max="100" name="Cantidad" placeholder="Cantidad" class="form-username form-control" id="Cantidad" required="yes">
            <label for="Categoria">Categoría:</label>
            <input list="Categoria" contenteditable="false" placeholder="Categoría" class="form-control" name="Categoria" required="yes">
            <datalist id="Categoria">
              <option value="Comedores"></option>
              <option value="Sillas y sillones"></option>
              <option value="Bancos"></option>
              <option value="Mesas de centro"></option>
              <option value="Percheros"></option>
            </datalist>
            <br>
            <button type="submit" class="btn btn-defaul btn-block">Agregar Producto</button>
            <br>
          </form>
          <br>
        </div>
        <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6" style="background-color: #f0ad4e;">

          <form id="uploadimage" action="../Controlador/upload_file.php" method="post" enctype="multipart/form-data">
            <br>
            <input type="checkbox" value="1" name="opc"  data-onstyle="outline-warning" data-offstyle="outline-dark" data-toggle="toggle" data-on="Mostrar" data-off="Ocultar">
            <img id="imgSalida" src="img/no-image.jpg" width="355" height="233">
            <br>
            <br>
            <input name="file-input" id="file-input" type="file" required="yes">
            <br>
            <input type='hidden' name='Carrusel1' id='Carrusel1' value='1'>
            <input type="submit"  value="Cargar imagen" class="btn btn-defaul btn-block">
            <br>
            <br>
          </form>
          

        </div>
        <br>
        <br>
      </div>

      <div id="menu1" class="tab-pane fade">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center table-responsive">
          <?php $query = "SELECT * FROM PRODUCTO ORDER BY CATEGORIA"; ?>
          <?php $rsQuery = mysqli_query($con, $query) or die ("Error de consulta");  ?>
          <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
              <table class="table table-hover table-responsive table-condensed" >
                <tr>
                  <th>Imagen</th>
                  <th>Id Producto</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Acciones</th>
                </tr> 

                  <?php while ($Producto = mysqli_fetch_array($rsQuery)) { 
                  $ActualizarProducto = $Producto[0];
                  $ActualizarNombre = $Producto[1];
                  $ActualizarDescripcion = $Producto[2];
                  $ActualizarPrecio = $Producto[3];
                  $ActualizarCantidad = $Producto[4];
                  if ($Producto[6]=="Disponible") {echo "<tr>";}
                  elseif ($Producto[6]=="Agotado") {echo "<tr class='danger'>";}
                  echo "          
                  <td> <img class='img-responsive center-block' style='width: 80px; ;height: 80px;' src='img/Inventario/$Comedores[1].jpg'> </td>
                  <td>
                    <form role='form' action='Actu.php' method='post' class='update-form'> 
                    <input type='number' name='ActualizarProducto' placeholder='Id Producto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto' readonly>
                  </td>
                  <td>
                    <input type='text' name='ActualizarNombre' placeholder='Nombre' class='form-username form-control' id='ActualizarNombre' required'yes' value='$ActualizarNombre'>
                  </td>
                  <td> <input type='text' name='ActualizarDescripcion' placeholder='Descripción' class='form-username form-control' id='ActualizarDescripcion' required'yes' value='$ActualizarDescripcion'>
                  </td>
                  <td> 
                    <input type='number' min='1' max='99999' name='ActualizarPrecio' placeholder='Precio' class=' form-control' id='ActualizarPrecio' required='yes' value='$ActualizarPrecio'>
                  </td>
                  <td>
                    <input type='number' min='0' max='100'  name='ActualizarCantidad' placeholder='Cantidad' class='form-username form-control' id='ActualizarCantidad' required='yes' value='$ActualizarCantidad' >
                  </td>   
                  <td> 
                    <button class= 'btn btn-warning btn-block' title='Actualizar Producto'><span class='glyphicon glyphicon-upload'></button>
                    </form>
                    <form role='form' action='Dele.php' method='post' class='detele-form'>
                    <input type='hidden' name='ActualizarProducto' placeholder='ActualizarProducto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto'>
                    <button class= 'btn btn-danger btn-block' title='Eliminar Producto'><span class='glyphicon glyphicon-trash'></button> 
                    </form>
                  </td>    
                </tr>";}?>
              </table>
        </div>
        <br>
        <br>
      </div>
   
      <div id="menu2" class="tab-pane fade">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center table-responsive">
          <?php $querySillas = "SELECT * FROM PRODUCTO WHERE CATEGORIA = 'Sillas y Sillones'"; ?>
          <?php $rsSillas = mysqli_query($con, $querySillas) or die ("Error de consulta");  ?>
          <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
            <h2>Sillas y Sillones</h2>
              <table class="table table-hover table-responsive table-striped">
                <tr>
                    <th>Imagen</th>
                    <th>Id Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr> 
                <?php while ($Sillas = mysqli_fetch_array($rsSillas)) { 
                $ActualizarProducto = $Sillas[0];
                $ActualizarNombre = $Sillas[1];
                $ActualizarDescripcion = $Sillas[2];
                $ActualizarPrecio = $Sillas[3];
                $ActualizarCantidad = $Sillas[4];
                if ($Sillas[6]=="Disponible") {echo "<tr>";}
                elseif ($Sillas[6]=="Agotado") {echo "<tr class='danger'>";}
                echo "          
                  <td> 
                    <img class='img-responsive center-block' style='width: 80px; ;height: 80px;' src='img/Inventario/$Sillas[1].jpg'> </td>
                  <td>
                    <form role='form' action='Actu.php' method='post' class='update-form'> 
                    <input type='number' name='ActualizarProducto' placeholder='Id Producto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto' readonly>
                  </td>
                  <td>
                    <input type='text' name='ActualizarNombre' placeholder='Nombre' class='form-username form-control' id='ActualizarNombre' required'yes' value='$ActualizarNombre'>
                  </td>
                  <td> <input type='text' name='ActualizarDescripcion' placeholder='Descripción' class='form-username form-control' id='ActualizarDescripcion' required'yes' value='$ActualizarDescripcion'>
                  </td>
                  <td> 
                    <input type='number' min='1' max='99999' name='ActualizarPrecio' placeholder='Precio' class=' form-control' id='ActualizarPrecio' required='yes' value='$ActualizarPrecio'>
                  </td>
                  <td>
                    <input type='number' min='0' max='100'  name='ActualizarCantidad' placeholder='Cantidad' class='form-username form-control' id='ActualizarCantidad' required='yes' value='$ActualizarCantidad' >
                    </td>   
                  <td> 
                    <button class= 'btn btn-warning btn-block' title='Actualizar Producto'><span class='glyphicon glyphicon-upload'></button>
                    </form>
                    <form role='form' action='Dele.php' method='post' class='detele-form'>
                    <input type='hidden' name='ActualizarProducto' placeholder='ActualizarProducto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto'>
                    <button class= 'btn btn-danger btn-block' title='Eliminar Producto'><span class='glyphicon glyphicon-trash'></button> 
                    </form>
                  </td>    
                </tr>";}?>
              </table>
        </div>
        <br>
        <br>
      </div>

      <div id="menu3" class="tab-pane fade">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center table-responsive">
          <?php $queryBancos = "SELECT * FROM PRODUCTO WHERE CATEGORIA = 'Bancos'"; ?>
          <?php $rsBancos = mysqli_query($con, $queryBancos) or die ("Error de consulta");  ?>
          <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
            <h2>Bancos</h2>
              <table class="table table-hover table-responsive table-striped">
                <tr>
                    <th>Imagen</th>
                    <th>Id Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr> 
                <?php while ($Bancos = mysqli_fetch_array($rsBancos)) { 
                $ActualizarProducto = $Bancos[0];
                $ActualizarNombre = $Bancos[1];
                $ActualizarDescripcion = $Bancos[2];
                $ActualizarPrecio = $Bancos[3];
                $ActualizarCantidad = $Bancos[4];
                if ($Bancos[6]=="Disponible") {echo "<tr>";}
                elseif ($Bancos[6]=="Agotado") {echo "<tr class='danger'>";}
                echo "         
                  <td> <img class='img-responsive center-block' style='width: 80px; ;height: 80px;' src='img/Inventario/$Bancos[1].jpg'> </td>
                  <td>
                    <form role='form' action='Actu.php' method='post' class='update-form'> 
                    <input type='number' name='ActualizarProducto' placeholder='Id Producto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto' readonly>
                  </td>
                  <td>
                    <input type='text' name='ActualizarNombre' placeholder='Nombre' class='form-username form-control' id='ActualizarNombre' required'yes' value='$ActualizarNombre'>
                  </td>
                  <td> <input type='text' name='ActualizarDescripcion' placeholder='Descripción' class='form-username form-control' id='ActualizarDescripcion' required'yes' value='$ActualizarDescripcion'>
                  </td>
                  <td> 
                    <input type='number' min='1' max='99999' name='ActualizarPrecio' placeholder='Precio' class=' form-control' id='ActualizarPrecio' required='yes' value='$ActualizarPrecio'>
                  </td>
                  <td>
                    <input type='number' min='0' max='100'  name='ActualizarCantidad' placeholder='Cantidad' class='form-username form-control' id='ActualizarCantidad' required='yes' value='$ActualizarCantidad' >
                    </td>  
                  <td> 
                    <button class= 'btn btn-warning btn-block' title='Actualizar Producto'><span class='glyphicon glyphicon-upload'></button>
                    </form>
                    <form role='form' action='Dele.php' method='post' class='detele-form'>
                    <input type='hidden' name='ActualizarProducto' placeholder='ActualizarProducto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto'>
                    <button class= 'btn btn-danger btn-block' title='Eliminar Producto'><span class='glyphicon glyphicon-trash'></button> 
                    </form>
                  </td>    
                </tr>";}?>
              </table>
        </div>
        <br>
        <br>
      </div>

      <div id="menu4" class="tab-pane fade">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center table-responsive">
          <?php $queryMesas = "SELECT * FROM PRODUCTO WHERE CATEGORIA = 'Mesas de Centro'"; ?>
          <?php $rsMesas = mysqli_query($con, $queryMesas) or die ("Error de consulta");  ?>
          <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
            <h2>Mesas de Centro</h2>
               <table class="table table-hover table-responsive table-striped">
                  <tr>
                      <th>Imagen</th>
                      <th>Id Producto</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Acciones</th>
                  </tr> 
                  <?php while ($Mesas = mysqli_fetch_array($rsMesas)) { 
                  $ActualizarProducto = $Mesas[0];
                  $ActualizarNombre = $Mesas[1];
                  $ActualizarDescripcion = $Mesas[2];
                  $ActualizarPrecio = $Mesas[3];
                  $ActualizarCantidad = $Mesas[4];
                  if ($Mesas[6]=="Disponible") {echo "<tr>";}
                  elseif ($Mesas[6]=="Agotado") {echo "<tr class='danger'>";}
                  echo "          
                  <td> <img class='img-responsive center-block' style='width: 80px; ;height: 80px;' src='img/Inventario/$Mesas[1].jpg'> </td>
                  <td>
                    <form role='form' action='Actu.php' method='post' class='update-form'> 
                    <input type='number' name='ActualizarProducto' placeholder='Id Producto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto' readonly>
                  </td>
                  <td>
                    <input type='text' name='ActualizarNombre' placeholder='Nombre' class='form-username form-control' id='ActualizarNombre' required'yes' value='$ActualizarNombre'>
                  </td>
                  <td> <input type='text' name='ActualizarDescripcion' placeholder='Descripción' class='form-username form-control' id='ActualizarDescripcion' required'yes' value='$ActualizarDescripcion'>
                  </td>
                  <td> 
                    <input type='number' min='1' max='99999' name='ActualizarPrecio' placeholder='Precio' class=' form-control' id='ActualizarPrecio' required='yes' value='$ActualizarPrecio'>
                  </td>
                  <td>
                    <input type='number' min='0' max='100'  name='ActualizarCantidad' placeholder='Cantidad' class='form-username form-control' id='ActualizarCantidad' required='yes' value='$ActualizarCantidad' >
                    </td>  
                  <td> 
                    <button class= 'btn btn-warning btn-block' title='Actualizar Producto'><span class='glyphicon glyphicon-upload'></button>
                    </form>
                    <form role='form' action='Dele.php' method='post' class='detele-form'>
                    <input type='hidden' name='ActualizarProducto' placeholder='ActualizarProducto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto'>
                    <button class= 'btn btn-danger btn-block' title='Eliminar Producto'><span class='glyphicon glyphicon-trash'></button> 
                    </form>
                  </td>    
                </tr>";}?>
                </table>
        </div>
        <br>
        <br>
      </div>

      <div id="menu5" class="tab-pane fade">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text-center table-responsive">
          <?php $queryPercheros = "SELECT * FROM PRODUCTO WHERE CATEGORIA = 'Percheros'"; ?>
          <?php $rsPercheros = mysqli_query($con, $queryPercheros) or die ("Error de consulta"); ?>
          <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;">
            <h2>Percheros</h2>
               <table class="table table-hover table-responsive table-striped">
                    <tr>
                        <th>Imagen</th>
                        <th>Id Producto</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr> 
                    <?php while ($Percheros = mysqli_fetch_array($rsPercheros)) { 
                    $ActualizarProducto = $Percheros[0];
                    $ActualizarNombre = $Percheros[1];
                    $ActualizarDescripcion = $Percheros[2];
                    $ActualizarPrecio = $Percheros[3];
                    $ActualizarCantidad = $Percheros[4];
                    if ($Percheros[6]=="Disponible") {echo "<tr>";}
                    elseif ($Percheros[6]=="Agotado") {echo "<tr class='danger'>";}
                    echo "          
                  <td> <img class='img-responsive center-block' style='width: 80px; ;height: 80px;' src='img/Inventario/$Percheros[1].jpg'> </td>
                  <td>
                    <form role='form' action='Actu.php' method='post' class='update-form'> 
                    <input type='number' name='ActualizarProducto' placeholder='Id Producto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto' readonly>
                  </td>
                  <td>
                    <input type='text' name='ActualizarNombre' placeholder='Nombre' class='form-username form-control' id='ActualizarNombre' required'yes' value='$ActualizarNombre'>
                  </td>
                  <td> <input type='text' name='ActualizarDescripcion' placeholder='Descripción' class='form-username form-control' id='ActualizarDescripcion' required'yes' value='$ActualizarDescripcion'>
                  </td>
                  <td> 
                    <input type='number' min='1' max='99999' name='ActualizarPrecio' placeholder='Precio' class=' form-control' id='ActualizarPrecio' required='yes' value='$ActualizarPrecio'>
                  </td>
                  <td>
                    <input type='number' min='0' max='100'  name='ActualizarCantidad' placeholder='Cantidad' class='form-username form-control' id='ActualizarCantidad' required='yes' value='$ActualizarCantidad' >
                    </td>  
                  <td> 
                    <button class= 'btn btn-warning btn-block' title='Actualizar Producto'><span class='glyphicon glyphicon-upload'></button>
                    </form>
                    <form role='form' action='Dele.php' method='post' class='detele-form'>
                    <input type='hidden' name='ActualizarProducto' placeholder='ActualizarProducto' class='form-username form-control' id='ActualizarProducto' value='$ActualizarProducto'>
                    <button class= 'btn btn-danger btn-block' title='Eliminar Producto'><span class='glyphicon glyphicon-trash'></button> 
                    </form>
                  </td>    
                </tr>";}?>
                  </table>
        </div>
        <br>
        <br>
      </div>
    </div>
</dir>
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
              Copyright &copy; 2018 DIMMSA&nbsp;|<a href="">&nbsp;Términos y condiciones</a> 
          </div>
        </div>
    </div>
  </div>
    </div>
  <script>
$(window).load(function(){

 $(function() {
  $('#file-input').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('#imgSalida').attr("src",result);
     }
    });
  });

  </script>
</body>
</html>