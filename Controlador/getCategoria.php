<?php
    //DB details
    include "../Controlador/Conexion.php";
    $id = str_replace("-", " ", $_GET['id']);

    //get content from database
    $queryProducto = "SELECT Count(*) FROM Producto WHERE Categoria = '".$id."'";
    $rsProducto = mysqli_query($con, $queryProducto) or die ("Error de consulta");
    $Producto = mysqli_fetch_array($rsProducto);
       

        if($Producto[0] == 0){
          echo" 
            <form action='./Controlador/CategoriaDown.php' method='post'>
            <input type='hidden' name='Eliminar' value='".$id."'>";

            echo "<div style='text-align: center;' align='center'>";
            echo "<h1>Advertencia</h1>
            <div class='row'>
            <div class='col-md-4 '>
            <img id='imgSalida' src='Media/info.jpg' width='200' height='200'>
            </div>
            <div class='col-md-8' style='text-align: center; justify-content: center;'>
            <br><br>
            <h4>Se eliminara la categoria <b>".$id."</b></h4>
           
            </div>
            </div>";
          echo"
            <div class='modal-footer'>  
              <button type='submit'  value='Borrar' class='btn btn-danger'><i class='fas fa-trash fa-lg mr-1 white-text'></i>Borrar</button> 
              </form>
              <button type='button' class='btn btn-success' data-dismiss='modal'><i class='fas fa-times fa-lg mr-1 white-text'></i> Cancelar</button>
            </div>";
        }else{
          echo "<div style='text-align: center;' align='center'>";
          echo "<h1>Advertencia</h1>
          <div class='row'>
          <div class='col-md-4 '>
          <img id='imgSalida' src='Media/info.jpg' width='200' height='200'>
          </div>
          <div class='col-md-8' style='text-align: center; justify-content: center;'>
          <br><br>
          <h4>La categoria <b>".$id."</b> contiene productos. 
          <br>No se pueden borrar categorias con productos! </h4>
         
          </div>
          </div>";
          echo "</div>";
          echo "
          <div class='modal-footer'>  
            <button type='button' class='btn btn-success' data-dismiss='modal'><i class='fas fa-times fa-lg mr-1 white-text'></i> Cerrar</button>
          </div>";
        }
      


// close connection
mysqli_close($con);
?>