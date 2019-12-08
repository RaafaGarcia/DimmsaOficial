<?php
include "../Controlador/Conexion.php";

$nombreArchivo = $_FILES["file-input"]["name"];
$id = $_POST['Carrusel'];
if (isset($_POST['opc']) && $_POST['opc'] == '1'){
  $opc = 1;
}else{
  $opc = 0;
}

   if (file_exists("../Media/Carrusel/" . $_FILES["file-input"]["name"]))
      {echo $_FILES["file-input"]["name"] . " ya existe se reemplazara en. ";
        $nombreArchivo = $_FILES["file-input"]["name"];
        unlink("../Media/Carrusel/" . $nombreArchivo);
        move_uploaded_file($_FILES["file-input"]["tmp_name"], "../Media/Carrusel/" . $_FILES["file-input"]["name"]);
        
        $sql = "INSERT INTO CARRUSEL values(".$id.",'". $nombreArchivo ."',1) ON DUPLICATE KEY UPDATE IMG_REFERENCIA ='". $nombreArchivo ."', OPC = 1;";
        if(mysqli_query($con, $sql)){
          header("Location: ../inventario.php");
        }
      }else{   

      move_uploaded_file($_FILES["file-input"]["tmp_name"], "../Media/Carrusel/" . $_FILES["file-input"]["name"]);
      $nombreArchivo = $_FILES["file-input"]["name"];
      }

      $sql = "INSERT INTO CARRUSEL values(".$id.",'". $nombreArchivo ."',1) ON DUPLICATE KEY UPDATE IMG_REFERENCIA ='". $nombreArchivo ."', OPC = 1;";
    	if(mysqli_query($con, $sql)){
        header("Location: ../inventario.php");
		  }

    
// close connection
mysqli_close($con);
?>