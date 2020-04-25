<?php
 $conexion = new mysqli("localhost","username","password","database");
 if (!$conexion) {
 	die("Error al conectar en la base de datos: ".$conexion->connect_error);
 }
 $fecha12 = $_POST["seleccionar_fecha"];
 $sql = "DELETE FROM vacaciones_de_navidad WHERE data= '$fecha12'";
 echo mysqli_query($conexion, $sql);
?>