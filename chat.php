<?php
include 'db-conexion.php';
$consulta = "SELECT * FROM chat";
$ejecutar = $conexion->query($consulta);
while ($fila = $ejecutar->fetch_array()):
 ?>
<div id="datos-chat">
  <span style="color: #ee6f57"><?php echo $fila['nombre']; ?>: </span>
  <span style="color: #fff"><?php echo $fila['mensaje']; ?></span>
  <span style="float: right"><?php echo formato($fila['fecha']); ?></span>
</div>
<?php endwhile; ?>
