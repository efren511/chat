<?php
include 'db-conexion.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unidad</title>
    <link rel="stylesheet" href="estilos.css">
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
     <script type="text/javascript">
       function ajax(){
         var req = new XMLHttpRequest();
         req.onreadystatechange = function(){
           if (req.readyState == 4 && req.status == 200) {
             document.getElementById('chat').innerHTML = req.responseText;
           }
         }
         req.open('GET', 'chat.php', true);
         req.send();
       }

       setInterval(function(){ajax();}, 1000);
     </script>
  </head>
  <body onload="ajax()">
    <div id="contenedor">
      <div id="caja-chat">
        <div id="chat">

        </div>
      </div>
      <form action="index.php" method="post">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre">
        <textarea name="mensaje" rows="8" cols="80" placeholder="Ingresa un mensaje"></textarea>
        <input type="submit" name="enviar" value="Enviar">
      </form>
      <?php
      if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $mensaje = $_POST['mensaje'];
        $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
        $ejecutar = $conexion->query($consulta);
        if ($ejecutar) {
          echo "";
          #echo "<embed loop='false' src='sonido.mp3' hidden='true' autoplay='true'";
        }
      }

       ?>
    </div>
  </body>
</html>
