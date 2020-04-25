<?php
  $db= new mysqli("localhost","username","password","database");
  $limite = $_POST['limite'];
  $query = "SELECT ID FROM educaplay_act_4";
  $res = $db->query($query);
  $total=$res->num_rows;
  $paginas = ceil($total / 5);
  $query = "SELECT * FROM educaplay_act_4 LIMIT $limite, 5";
  $res = $db->query($query);
  if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
      echo "<div id='actividades' class='".$row['ID']."'>";
      echo "<p id='id_act'>".$row['ID']."</p>";
      echo "<br>";
      echo "<iframe src='".$row['actividad']."' frameborder='0' class='iframe_estilos'></iframe>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "</div>";
    }
  }
  echo "<div class='navegacion_actividades_educaplay'>";
  if ($limite > 0) {
    $limit = $limite-5;
    echo "<aside class=\"anterior_educaplay\" onclick=\"cargarproductos(".$limit.")\">Anterior</aside>";
  }else{
    echo "<aside class=\"anterior_educaplay\" style='color:transparent; background:transparent;'></aside>";
  }
  foreach ($productos as $producto) {
    echo "<article>".$producto."</article>";
  }
  if ($limite<$total-5) {
    $limit=$limite+5;
    echo "<aside class=\"siguiente_educaplay\" onclick=\"cargarproductos(".$limit.")\">Siguiente</aside>";
  }else{
    echo "<aside class=\"siguiente_educaplay\" style='color:transparent; background:transparent;'></aside>";
  }
  echo "</div>";
?>