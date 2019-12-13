<?php
include "../Controlador/Conexion.php";

$Id = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Imagen = $_FILES["Imagen"]["name"];
$ImgOld = $_POST['ImgOld'];
$Referencia = $_FILES["Referencia"]["name"];
$RefOld = $_POST['RefOld'];
$Materiales = $_POST['Materiales'];
$Colores = $_POST['Colores'];
$Medidas = $_POST['Medidas'];
$Categoria = $_POST['Categoria'];

	if (empty($_FILES["Imagen"]["name"])) {
       	$Imagen = $ImgOld;

      }else{   
     $nombreArchivoImagen = $_FILES["Imagen"]["name"];
     move_uploaded_file($_FILES["Imagen"]["tmp_name"], "../Media/Productos/" . $_FILES["Imagen"]["name"]);
     unlink("../Media/Productos/" . $ImgOld);
      }

	if (empty($_FILES["Referencia"]["name"])) {
		$Referencia = $RefOld;
       
      }else{   
      $nombreArchivoReferencia = $_FILES["Referencia"]["name"];
     move_uploaded_file($_FILES["Referencia"]["tmp_name"], "../Media/Referencias/" . $_FILES["Referencia"]["name"]);
     unlink("../Media/Referencias/" . $RefOld);
      }

  $sql = "INSERT INTO PRODUCTO values(".$Id.",'$Nombre','$Imagen','$Referencia','$Materiales','$Colores','$Medidas','$Categoria') ON DUPLICATE KEY UPDATE
        Nombre = '$Nombre', 
        Imagen = '$Imagen', 
        ImgReferencia = '$Referencia', 
        Materiales = '$Materiales', 
        Colores = '$Colores', 
        Medidas = '$Medidas', 
        Categoria = '$Categoria';";
    	if(mysqli_query($con, $sql)){
        header("Location: ../inventario.php");
		  }

// close connection
mysqli_close($con);
?>

