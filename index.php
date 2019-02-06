<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM equipo");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>
     <div class="nav-wrapper">
       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="equipos.php">Lista equipo</a>
         <li><a href="jugadores.php">Lista jugadores</a>
         <li><a href="partidos.php">Lista partidos</a>
       </ul>
     </div>
   </nav>
    <input type="text" name="Nombre" value="">Nombre Jugador <input type="button" name="Boton" value="Enviar"><br><br>
    <input type="text" name="NombreEquipo" value="">Nombre Equipo <input type="button" name="Boton" value="Enviar">
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
