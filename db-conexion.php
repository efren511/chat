<?php

$servidor = "localhost";
$usuario = "id14741732_robot";;
$clave = "9786070125935Luis#511";
$base = "id14741732_efrenchii";

$conexion = new mysqli($servidor, $usuario, $clave, $base);

function formato($fecha){
  return date('g:i a', strtotime($fecha));
}

 ?>
