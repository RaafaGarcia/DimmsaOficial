<?php include "../Controlador/Conexion.php"; ?>
<!DOCTYPE html>
<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="../Vista/Img/favicon.png" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- toggle buttons -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- toast -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<head>
	<title>Dimmsa | Inventario</title>
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
        <a class="nav-link" href="Empresa.php">Empresa</a>
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
   
    <h1>Inventario</h1>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills " role="tablist">
    <li class="nav-item">
      <a class="nav-link active blanco" data-toggle="pill" href="#home">Carrusel</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link blanco" data-toggle="pill" href="#menu1">Categorias</a>
    </li>
    <li class="nav-item">
      <a class="nav-link blanco" data-toggle="pill" href="#menu2">Productos</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <table class="table table-dark table-hover" style="align-content: center;">
    <thead>
      <tr>
        <th>Orden</th>
        <th>Imagen</th>
        <th>Ruta</th>
        <th>Opción</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody >

    <?php $queryCarrusel = "SELECT * FROM CARRUSEL"; 
  $rsCarrusel = mysqli_query($con, $queryCarrusel) or die ("Error de consulta");         
    while ($Carrusel = mysqli_fetch_array($rsCarrusel)) {
      echo "
      <tr>
      <form id='uploadimage' action='../Controlador/carruselUp.php' method='post' enctype='multipart/form-data'>
        <td>".$Carrusel[0]."</td>
        <td >
          <img id='imgSalida' src='../media/Carrusel/".$Carrusel[1]."' width='190' height='95'>
        </td>
        <td>
        <a>".$Carrusel[1]."</a>
          <div class='custom-file'>
            <input type='file' class='custom-file-input' id='customFileLang' lang='es' name='file-input' required='yes'>
            <label class='custom-file-label' for='customFileLang'>Seleccionar Archivo</label>
          </div>
        </td>
        <td>";
        if($Carrusel[2] == 1){ ?>
        <a>&nbsp; </a>
      <input type='checkbox' value='$Carrusel[2]' name='opc' id='check'  data-onstyle='outline-warning' data-offstyle='warning' data-toggle='toggle' data-on='<i class="fa fa-eye-slash fa-lg"></i> Ocultar' data-off='<i class="fa fa-eye fa-lg"></i> Mostrar' disabled checked>
        <?php }else{ ?>
          <a>&nbsp; </a>
          <input type='checkbox' value='$Carrusel[2]' name='opc' id='check'  data-onstyle='outline-warning' data-offstyle='warning' data-toggle='toggle' data-on='<i class="fa fa-eye-slash fa-lg"></i> Ocultar' data-off='<i class="fa fa-eye fa-lg"></i> Mostrar' disabled>
       <?php }
        echo"
        </td>
        <td>
          <input type='hidden' name='Carrusel' id='Carrusel' value='".$Carrusel[0]."'>";?>
          <input type='submit'  value='Actualizar' class='btn btn-outline-warning btn-block'>
        <?php 
        echo" 
        </form>
          <form id='uploadimage' action='../Controlador/carruselDown.php' method='post' enctype='multipart/form-data'>
          <input type='hidden' name='Carrusel' value='".$Carrusel[0]."'>
          <input type='hidden' name='Borrar' value='".$Carrusel[1]."'>";?>
          <br>
          <input type='submit'  value='Borrar' class='btn btn-outline-danger btn-block'>
        <?php 
        echo"
          </form>
        </td>
      </tr> ";  }?>
    </tbody>
  </table>
    </div>




    <div id="menu1" class="container tab-pane fade"><br>
    <table class="table table-dark table-hover" style="align-content: center;">
    <thead>
      <tr>
        <th>Categoria</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody >
    <tr>
        <td>
        <form action='../Controlador/CategoriaUp.php' method='post'>
        <input type="text" class="form-control" placeholder="Categoria" name="Nombre" required>
        </td>
        <td>
          <input type='submit'  value='Agregar' class='btn btn-outline-success btn-block'>
        </form>
        </td>
      </tr>
    </tbody>
  </table>
    <br>
    <table class="table table-dark table-hover" style="align-content: center;">
    <thead>
      <tr>
        <th>Categoria</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody >
    <?php $queryCategoria = "SELECT * FROM CATEGORIA"; 
  $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");         
    while ($Categoria = mysqli_fetch_array($rsCategoria)) {
      echo"
      <tr>
        <td>".$Categoria[0]."</td>
        <td>
        <form action='../Controlador/CategoriaDown.php' method='post'>
          <input type='hidden' name='Eliminar' value='".$Categoria[0]."'>
          <input type='submit'  value='Borrar' class='btn btn-outline-danger btn-block'>
        </form>
        </td>
      </tr>
    ";}?>
    </tbody>
  </table>
  </div>







    <div id="menu2" class="container tab-pane fade"><br>
    <table class="table table-dark table-hover" style="align-content: center;">
    <thead>
      <tr>
        <th>Datos producto</th>
      </tr>
    </thead>
    <tbody style="text-align: left;">
    <tr>
        <td>
        <form  action='../Controlador/CategoriaUp.php' method='post'>
        <label>Nombre:</label>
        <input type="text" class="form-control" placeholder="Nombre del producto" name="Nombre" required>
        <label>Imagen:</label>
        <div class='custom-file'>
            <input type='file' class='custom-file-input' id='customFileLang' lang='es' name='file-img'>
            <label class='custom-file-label' for='customFileLang'>Seleccionar imagen producto.</label>
        </div>
        <label>Referencia:</label>
        <div class='custom-file'>
            <input type='file' class='custom-file-input' id='customFileLang' lang='es' name='file-ref'>
            <label class='custom-file-label' for='customFileLang'>Seleccionar referencia producto</label>
        </div>
        <label>Materiales:</label>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="Materiales" placeholder="Materiales" required></textarea>
        </div>
        <label>Colores:</label>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="Colores" placeholder="Colores" required></textarea>
        </div>
        <label>Medidas:</label>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="Medidas" placeholder="Medidas" required></textarea>
        </div>
        <label>Categoria:</label>
        <select name="cars" class="custom-select">
          <option selected>Custom Select Menu</option>
          <option value="volvo">Volvo</option>
          <option value="fiat">Fiat</option>
          <option value="audi">Audi</option>
        </select>
        <br><br>
        <input type='submit'  value='Agregar' class='btn btn-outline-success btn-block'>
        </td>
        </form>
      </tr>
    </tbody>
  </table>
      <br>

      <table class="table table-dark table-hover" style="align-content: center;">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Detalles</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody >
    <tr>
        <td> Comedor Pierre </td>
        <td> 
        <input type='submit'  value='Ver Detalles' class='btn btn-outline-success btn-block'>
        </td>
        <td> 
        <input type='submit'  value='Eliminar' class='btn btn-outline-danger btn-block'>
        </td>
    </tr>
    </tbody>
  </table>  
      
      </div>
  </div>


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
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
  <br>
    </div>
    <br>
    <br>
	</section>
<style>
.footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: black; color: white; text-align: center;}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #000000;
    border-color: #cf6f19;
    border-style: solid;
}
.blanco {
    color: white;
}

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