<?php
 $conexion = new mysqli("localhost","username","password","database");
 if (!$conexion) {
   die("Error DB: ".$conexion->connect_error);
 }
 $fecha12 = $_POST["seleccionar_fecha"];
 $consulta = "DELETE FROM dias_festivos WHERE data=?";
 $stmt = $conexion->prepare($consulta);
 $ok = $stmt->bind_param("s",$fecha12);
 $ok = $stmt->execute();
 if ($ok) {
   echo "1";
 }
 $stmt->close();
 $conexion->close();
?>
