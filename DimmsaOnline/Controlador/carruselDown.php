<?php
include "../Controlador/Conexion.php";


$id = $_POST['Carrusel'];
$img = $_POST['Borrar'];
$nombreArchivo = "no-image.jpg";

    $sql = "INSERT INTO CARRUSEL values(".$id.",'". $nombreArchivo ."',0) ON DUPLICATE KEY UPDATE IMG_REFERENCIA ='". $nombreArchivo ."', OPC = 0;";
    	if(mysqli_query($con, $sql)){
        unlink("../Media/Carrusel/" . $img);
        header("Location: ../inventario.php");
		}else{
    		echo "Error";
		}

    
// close connection
mysqli_close($con);
?>