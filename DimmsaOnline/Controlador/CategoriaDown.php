<?php
include "../Controlador/Conexion.php";

$Nombre = $_POST['Eliminar'];

      $sql = "DELETE FROM CATEGORIA WHERE CATEGORIA ='". $Nombre ."';";
    	if(mysqli_query($con, $sql)){
       header("Location: ../inventario.php");
		  }

    
// close connection
mysqli_close($con);
?>