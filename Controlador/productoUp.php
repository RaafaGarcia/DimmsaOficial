<?php
include "../Controlador/Conexion.php";

$Nombre = $_POST['Nombre'];
$Imagen = $_FILES["Imagen"]["name"];
$Referencia = $_FILES["Referencia"]["name"];
$Materiales = $_POST['Materiales'];
$Colores = $_POST['Colores'];
$Medidas = $_POST['Medidas'];
$Categoria = $_POST['Categoria'];

	if (empty($_FILES["Imagen"]["name"])) {
       	$Imagen = "no-image.jpg";

      }else{   
     $nombreArchivoImagen = $_FILES["Imagen"]["name"];
     move_uploaded_file($_FILES["Imagen"]["tmp_name"], "../Media/Productos/" . $_FILES["Imagen"]["name"]);
      }

	if (empty($_FILES["Referencia"]["name"])) {
		$Referencia = "Dimmsa.png";
       
      }else{   
      $nombreArchivoReferencia = $_FILES["Referencia"]["name"];
     move_uploaded_file($_FILES["Referencia"]["tmp_name"], "../Media/Referencias/" . $_FILES["Referencia"]["name"]);
      }

      $sql = "INSERT INTO producto values(null,'$Nombre','$Imagen','$Referencia','$Materiales','$Colores','$Medidas','$Categoria');";
    	if(mysqli_query($con, $sql)){
        header("Location: ../inventario.php");
		  }

// close connection
mysqli_close($con);
?>

