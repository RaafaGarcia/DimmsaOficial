<?php
    //DB details
    include "../Controlador/Conexion.php";
    $id = $_GET['id'];

    //get content from database
    $queryProducto = "SELECT * FROM Carrusel WHERE ID = ".$id;
    $rsProducto = mysqli_query($con, $queryProducto) or die ("Error de consulta");
    $Producto = mysqli_fetch_array($rsProducto);


        echo $Nombre = $Producto[1];
        echo " <img id='imgSalida' src='Media/Carrusel/$Producto[1]' width='750' height='400'>";
        echo" 
          </form>
            <form id='uploadimage' action='./Controlador/carruselDown.php' method='post' enctype='multipart/form-data'>
            <input type='hidden' name='mostrar'  value='".$Producto[3]."'>
            <input type='hidden' name='Carrusel' value='".$Producto[0]."'>
            <input type='hidden'  name='ordenar' value='$Producto[2]'>
            <input type='hidden' name='Borrar' value='$Producto[1]'>";
      echo"
      <div class='modal-footer'>  
        <button  type='submit' value='Borrar' class='btn btn-danger'><i class='fas fa-trash fa-lg mr-1 white-text'></i> Borrar</button>
        </form>
        <button type='button' class='btn btn-success' data-dismiss='modal'><i class='fas fa-times fa-lg mr-1 white-text'></i> Cancelar</button>
      </div>";


// close connection
mysqli_close($con);
?>