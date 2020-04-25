<?php
$conexion = new mysqli("localhost","username","password","database");
if (!$conexion) {
  die("Error DB: ".$conexion->connect_error);
}
$consulta = "TRUNCATE TABLE dias_festivos";
$stmt = $conexion->prepare($consulta);
$ok = $stmt->execute();
if ($ok) {
  echo "1";
}
$stmt->close();
$conexion->close();
?>
