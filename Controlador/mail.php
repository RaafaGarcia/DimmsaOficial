<?php
$Nombre = $_POST['name'];
$correo = $_POST['email'];

$para      = 'brihand.lech@gmail.com';
$titulo = $_POST['Subject'];
$mensaje = 'Correo de: '.$correo.'/r/n'.$_POST['text'];
$cabeceras = 'From: '.$correo;

mail($para, $titulo, $mensaje, $cabeceras);
?>