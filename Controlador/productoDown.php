<?php
include "../Controlador/Conexion.php";

 $Id = $_POST['BorrarId'];
 $Img = $_POST['Img'];
$Ref = $_POST['Ref'];



      $sql = "DELETE FROM producto WHERE ID_PRODUCTO = ".$Id;
    	if(mysqli_query($con, $sql)){

        if ($Img == "no-image.jpg") {
 
}else{
  unlink("../Media/Productos/" . $Img);
}
if ($Ref == "Dimmsa.png") {
  
}else{
  unlink("../Media/Referencias/" . $Ref);
}

        
        
        header("Location: ../inventario.php");
		  }

// close connection
mysqli_close($con);
?>

