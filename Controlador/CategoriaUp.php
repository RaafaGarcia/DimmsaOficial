<?php
include "./Conexion.php";

$Nombre = $_POST['Nombre'];

      $sql = "INSERT INTO categoria values('". $Nombre ."');";
    	if(mysqli_query($con, $sql)){
        header("Location: ../inventario.php");
		  }

    
// close connection
mysqli_close($con);
?>