<?php
include "../Controlador/Conexion.php";

$Nombre = $_POST['Nombre'];
$Imagen = $_FILES["Imagen"]["name"];
$Referencia = $_FILES["Referencia"]["name"];
$Materiales = $_POST['Materiales'];
$Colores = $_POST['Colores'];
$Medidas = $_POST['Medidas'];
$Categoria = $_POST['Categoria'];


      echo $sql = "INSERT INTO PRODUCTO values(null,'$Nombre','$Imagen','$Referencia','$Materiales','$Colores','$Medidas','$Categoria');";
    	/*if(mysqli_query($con, $sql)){
        header("Location: ../inventario.php");
		  }*/

    
// close connection
mysqli_close($con);
?>

