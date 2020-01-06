<?php
    //DB details
    include "../Controlador/Conexion.php";
    $id = $_GET['id'];

    //get content from database
    $queryProducto = "SELECT * FROM producto WHERE ID_PRODUCTO = ".$id;
    $rsProducto = mysqli_query($con, $queryProducto) or die ("Error de consulta");
    $Producto = mysqli_fetch_array($rsProducto);

    $Nombre = $Producto[1];
        echo" 
        <form action='./Controlador/productoDown.php' method='post'>
        <input type='hidden' name='Img' value='".$Producto[2]."'>
        <input type='hidden' name='Ref' value='".$Producto[3]."'>";

            echo "<div style='text-align: center;' align='center'>";
            echo "<h1>Advertencia</h1>
            <div class='row'>
            <div class='col-md-4 '>
            <img id='imgSalida' src='Media/info.jpg' width='200' height='200'>
            </div>
            <div class='col-md-8' style='text-align: center; justify-content: center;'>
            <h4>Se eliminara el producto <b>".$Nombre."</b></h4>
            <img src='./Media/Productos/$Producto[2]' style='border-radius:5px; width: 130px;' class='img-fluid' alt='Imagen Actual'>

            </div>
            </div>";
          echo"
            <div class='modal-footer'>  
            <button type='submit' name='BorrarId' value=".$Producto[0]." class='btn btn-danger'><i class='fas fa-trash fa-lg mr-1 white-text'></i> Borrar</button>
            </form>
              <button type='button' class='btn btn-success' data-dismiss='modal'><i class='fas fa-times fa-lg mr-1 white-text'></i> Cancelar</button>
            </div>";
// close connection
mysqli_close($con);
?>