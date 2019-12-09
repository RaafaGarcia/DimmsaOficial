<?php include "../Controlador/Conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>DIMMSA ADMIN</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>

<body class="grey lighten-3">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar   ">
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
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">ADMINISTRADOR DE INVENTARIO</h2>


          <div class="card p-3">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active"  style="color:orange;" id="banner-tab" data-toggle="tab" href="#banner" role="tab" aria-controls="banner"
                      aria-selected="true">BANNERS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:orange;" id="categoria-tab" data-toggle="tab" href="#categoria" role="tab" aria-controls="categoria"
                      aria-selected="false">CATEGORÍAS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:orange;" id="producto-tab" data-toggle="tab" href="#producto" role="tab" aria-controls="producto"
                      aria-selected="false">PRODUCTOS</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <br>
                  <div class="tab-pane fade show active table-responsive" id="banner" role="tabpanel" aria-labelledby="home-tab">
                      <table class="table table-hover ">
                          <thead class="orange white-text">
                            <tr>
                              <th scope=" text-center">Orden</th>
                              <th scope=" text-center">Imagen</th>
                              <th scope=" text-center">Ruta</th>
                              <th scope=" text-center">Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $queryCarrusel = "SELECT * FROM CARRUSEL"; 
                          $rsCarrusel = mysqli_query($con, $queryCarrusel) or die ("Error de consulta");         
                            while ($Carrusel = mysqli_fetch_array($rsCarrusel)) {
                              echo "
                              <tr>
                              <form id='uploadimage' action='./Controlador/carruselUp.php' method='post' enctype='multipart/form-data'>
                                <td scope='row'>$Carrusel[0]</td>
                                <td style='max-width: 120px;min-width: 220px;'>
                                <img id='imgSalida' src='Media/Carrusel/$Carrusel[1]' width='200' height='105'>
                              </td>
                              <td style='min-width: 200px;'>
                              <a>".$Carrusel[1]."</a>
                              <div class='custom-file'>
                                  <input type='file' class='custom-file-input' id='customFileLang' lang='es' name='file-input' required='yes'>
                                  <label class='custom-file-label' for='customFileLang'>Seleccionar</label>
                              </div>
                              </td>
                                <td  style='width: 140px;'>";
                                if($Carrusel[2] == 1){ ?>
                                <a>&nbsp; </a>
                                <style>
                                  .toggle.ios, .toggle-on.ios, .toggle-off.ios { width:200px }
                                  .toggle.ios .toggle-handle { border-radius: 20px; }
                                </style>
                                <input type="checkbox" value='$Carrusel[2]'  name='opc' id='check' data-toggle="toggle" data-style="ios"  data-size="small" data-on='<i class="fa fa-eye-slash fa-lg"></i> Ocultar' data-off='<i class="fa fa-eye fa-lg"></i> Mostrar' data-onstyle="info" data-offstyle="default" checked>
                                <?php }else{ ?>
                                  <input type="checkbox" value='$Carrusel[2]'  name='opc' id='check' data-toggle="toggle" data-style="ios"  data-size="small" data-on='<i class="fa fa-eye-slash fa-lg"></i> Ocultar' data-off='<i class="fa fa-eye fa-lg"></i> Mostrar' data-onstyle="info" data-offstyle="default" >
                                  
                              <?php }
                               echo"
                                 <input type='hidden' name='Carrusel' id='Carrusel' value='".$Carrusel[0]."'>";?>
                                 <!-- <input type='submit'  value='Actualizar' class='btn btn-outline-warning btn-block'> -->
                              <button  type="submit" value='Actualizar' class="btn btn-deep-orange btn-sm btn-block mb-1"><i class="fas fa-edit fa-lg mr-1 white-text"></i> Editar</button>

                              <!-- <button  type="submit" class="btn btn-red btn-sm btn-block mb-1"><i class="fas fa-trash fa-lg mr-1 white-text"></i> Borrar</button> -->
                                
                                <?php 
                                echo" 
                                </form>
                                  <form id='uploadimage' action='./Controlador/carruselDown.php' method='post' enctype='multipart/form-data'>
                                  <input type='hidden' name='Carrusel' value='".$Carrusel[0]."'>
                                  <input type='hidden' name='Borrar' value='".$Carrusel[1]."'>";?>
                                  <!-- <input type='submit'  value='Borrar' class='btn btn-outline-danger btn-block'> -->
                                  <button  type="submit" value='Borrar' class="btn btn-red btn-sm btn-block mb-1"><i class="fas fa-trash fa-lg mr-1 white-text"></i> Borrar</button>
                                <?php 
                                echo"
                                  </form>
                                </td>
                              </tr> "; }?>
                            <!-- <tr>
                              <th scope="row">1</th>
                              <td style="max-width: 120px;min-width: 220px;">
                                <img id='imgSalida' src="http://mueblesdimmsa.com/wp-content/uploads/2013/10/7Mesas-de-Centro-Odessa.jpg" width='200' height='105'>
                              </td>
                              <td style="min-width: 200px;">
                                  <div class='custom-file'>
                                      <input type='file' class='custom-file-input' id='customFileLang' lang='es' name='file-input' required='yes'>
                                      <label class='custom-file-label' for='customFileLang'>Seleccionar</label>
                                    </div>
                              </td>
                              <td style="width: 145px;">
                                <button  type="button" class="btn btn-info btn-sm btn-block mb-1" ><i class="fas fa-eye-slash fa-lg mr-1 white-text"></i> Ocultar</button>
                                <button  type="button" class="btn btn-deep-orange btn-sm btn-block mb-1"><i class="fas fa-edit fa-lg mr-1 white-text"></i> Editar</button>
                                <button  type="button" class="btn btn-red btn-sm btn-block mb-1"><i class="fas fa-trash fa-lg mr-1 white-text"></i> Borrar</button>
                              </td>
                            </tr>
                            -->
                          </tbody>
                        </table>
                        
                       
                   
                  </div>
                  <div class="tab-pane fade" id="categoria" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="table-responsive">
                          <table class="table table-hover ">
                              <thead class="orange white-text">
                                <tr>
                                  <th scope="col">Num </th>
                                  <th scope="col">Categoria</th>
                                  <th scope="col">Acción</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                <?php $queryCategoria = "SELECT * FROM CATEGORIA"; 
                                $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");
                                $count=1;    
                                  while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                                    echo"
                                    <tr>
                                      <td>$count</td>
                                      <td>".$Categoria[0]."</td>
                                      <td>
                                      <form action='./Controlador/CategoriaDown.php' method='post'>
                                        <input type='hidden' name='Eliminar' value='".$Categoria[0]."'>
                                        <button type='submit'  value='Borrar' class='btn btn-red btn-sm btn-block mb-1'><i class='fas fa-trash fa-lg mr-1 white-text'></i></button>
                                      </form>
                                      </td>
                                    </tr>
                                  "; $count+=1;}?>
 
                              </tbody>
                            </table>
                          </div>
                      </div>

                      <div class="col-md-4">
                          <form class="text-center border border-light p-5" action='./Controlador/CategoriaUp.php' method='post'>

                              <p class="h4 mb-4">Nueva categoria</p>
                          
                              <p>En esta seccion puedes agregar una nueva categoria para tus productos.</p>
                          
                          
                              <!-- Name -->
                              <form action='./Controlador/CategoriaUp.php' method='post'>
      
        
        
                              <div class="md-form">
                                  <input type="text" id="form1" name="Nombre" class="form-control" required>
                                  <label for="form1">Nombre</label>
                              </div>
                          
                            
                              <button class="btn btn-success btn-block" type="submit" value="Agregar">Agregar</button>
                          
                          
                          </form>
                          <!-- Default form subscription -->
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="producto" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="row">
                          <div class="col-md-7">
                            <div class="table-responsive"> 
                              <table class="table table-hover ">
                                  <thead class="orange white-text">
                                    <tr>
                                      <th scope="col">Num </th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Acción</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td >
                                         Comedor Pierre
                                      </td>
                                      <td style="width: 150px;">
                                          <button  type="button" class="btn btn-info btn-sm btn-block mb-1"><i class="fas fa-eye fa-lg mr-1 white-text"></i> detalle</button>
                                        <button  type="button" class="btn btn-red btn-sm btn-block mb-1"><i class="fas fa-trash fa-lg mr-1 white-text"></i> Borrar</button>
                                      </td>
                                    </tr>
                                   
                                  </tbody>
                                </table>
                            </div>
                          </div>
    
                          <div class="col-md-5">
                              <form class="text-center border border-light p-5" action="#!">
    
                                  <p class="h4 mb-4">Nuevo Producto</p>
                              
                                  <p>En esta seccion puedes agregar un producto a tu inventario.</p>
                              
                              
                                  <!-- Name -->
                                  <div class="md-form">
                                      <input type="text" id="form1" class="form-control" required>
                                      <label for="form1">Nombre</label>
                                  </div>
                                  
                                  <!-- imagen -->
                                  <div class="p-1 mb-2" style="text-align:left;background:whitesmoke;border-radius:5px" >
                                      <label for="">Imagen</label>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar</label>
                                      </div>
                                    </div>
                                  
                                  <!-- referencia -->
                                  <div class="p-1" style="text-align:left;background:whitesmoke;border-radius:5px" >
                                      <label for="">Referencia</label>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Seleccionar</label>
                                      </div>
                                    </div>

                                  <!-- materiales -->
                                  <div class="md-form">
                                      <textarea id="textarea-char-counter" class="form-control md-textarea" length="120" rows="2"></textarea>
                                      <label for="textarea-char-counter">Materiales</label>
                                  </div>

                                  <!-- colores -->
                                  <div class="md-form">
                                      <textarea id="textarea-char-counter" class="form-control md-textarea" length="120" rows="2"></textarea>
                                      <label for="textarea-char-counter">Colores</label>
                                  </div>

                                  <!-- medidias -->
                                  <div class="md-form">
                                      <textarea id="textarea-char-counter" class="form-control md-textarea" length="120" rows="2"></textarea>
                                      <label for="textarea-char-counter">Medidas</label>
                                  </div>

                                  <!-- categoria -->
                                  <div class="" style="text-align:left">
                                      <label for="" style="text-align:left">Categoria</label>
                                      <select class="browser-default custom-select">
                                          <option selected value="">Selecciona una categoria</option>
                                          <?php $queryCategoria = "SELECT * FROM CATEGORIA"; 
                                          $rsCategoria = mysqli_query($con, $queryCategoria) or die ("Error de consulta");
                                              
                                            while ($Categoria = mysqli_fetch_array($rsCategoria)) {
                                              echo"
                                              <option value='$Categoria[0]'>$Categoria[0]</option>
                                               ";
                                               }?>
                                        </select>
                                  </div>
                                  <br>
                              
                                
                                  <button class="btn btn-success btn-block" type="submit">Agregar</button>
                              
                              
                              </form>
                              <!-- Default form subscription -->
                          </div>
                        </div>
                  </div>
                </div>
            
            <div class="card-body">

            

              

            </div>

          </div>
         

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
