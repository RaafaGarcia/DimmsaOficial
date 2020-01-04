<?php
$nombre = $_POST['name'];
$correo = $_POST['email'];

$para  = 'brihand.lech@gmail.com'; //direccion@mueblesdimmsa.com
$titulo = $_POST['Subject'];
$mensaje = 'Correo de: '.$nombre. "\r\n" .$correo . "\r\n" .$_POST['text'];
$cabeceras = 'From: '.$correo;

mail($para, $titulo, $mensaje, $cabeceras);
header("Location: ../index.php");
?>