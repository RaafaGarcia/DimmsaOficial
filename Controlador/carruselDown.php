<?php
include "./Conexion.php";

$ordenar = $_POST['ordenar'];
$mostrar = $_POST['mostrar'];
$id = $_POST['Carrusel'];
$img = $_POST['Borrar'];
$nombreArchivo = "no-image.jpg";

    $sql = "INSERT INTO carrusel values(".$id.",'". $img ."',$ordenar,$mostrar) ON DUPLICATE KEY UPDATE IMG_REFERENCIA ='". $nombreArchivo ."',ordenar = 0 ,mostrar=1;";
    	if(mysqli_query($con, $sql)){
        unlink("../Media/Carrusel/" . $img);
        header("Location: ../inventario.php");
		}else{
    		echo "Error";
		}

    
// close connection
mysqli_close($con);
?>