<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM jugador");
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
         <li><a href="index.php">Inicio</a>
         <li><a href="equipos.php">Lista equipos</a>
         <li><a href="partidos.php">Lista partidos</a>
       </ul>
     </div>
   </nav>
   <table border=1 cellpadding=4 cellspacing=0>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido </th>
        <th>Posición </th>
      </tr>
      <?php
      foreach ($resultado as $jugador) {
        echo "<tr>";
        echo "<td>".$jugador['id_jugador']."</td>";
        echo "<td>".$jugador['nombre']."</td>";
        echo "<td>".$jugador['apellido']."</td>";
        echo "<td>".$jugador['posicion']."</td>";
        echo "</tr>";
      }
      ?>
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
