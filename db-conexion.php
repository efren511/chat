<?php

$servidor = "localhost";
$usuario = "usuario";;
$clave = "clave";
$base = "base_de_datos";

$conexion = new mysqli($servidor, $usuario, $clave, $base);

function formato($fecha){
  return date('g:i a', strtotime($fecha));
}

 ?>
