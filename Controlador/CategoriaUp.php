<?php
include "../Controlador/Conexion.php";

$Nombre = $_POST['Nombre'];

      $sql = "INSERT INTO CATEGORIA values('". $Nombre ."');";
    	if(mysqli_query($con, $sql)){
        header("Location: ../Vista/Inventario.php");
		  }

    
// close connection
mysqli_close($con);
?>