<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM partido");
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
         <li><a href="jugadores.php">Lista jugadores</a>
         <li><a href="equipos.php">Lista equipos</a>
       </ul>
     </div>
   </nav>
   <table border=1 cellpadding=4 cellspacing=0>
      <tr>
        <th>ID</th>
        <th>Local</th>
        <th>Visitante</th>
        <th>resultado</th>
        <th>fecha</th>
      </tr>
      <?php
      foreach ($resultado as $partido) {
        echo "<tr>";
        echo "<td>".$partido['id_partido']."</td>";
        echo "<td>".$partido['local']."</td>";
        echo "<td>".$partido['visitante']."</td>";
        echo "<td>".$partido['resultado']."</td>";
        echo "<td>".$partido['fecha']."</td>";
        echo "</tr>";
      }
      ?>
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
