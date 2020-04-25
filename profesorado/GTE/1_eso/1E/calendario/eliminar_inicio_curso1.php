<?php
 $conexion = new mysqli("localhost","username","password","database");
 if (!$conexion) {
 	die("Error al conectar en la base de datos: ".$conexion->connect_error);
 }
mysql_real_scape_string($conexion,$_POST['seleccionar_fecha']);
 $fecha12 = $_POST["seleccionar_fecha"];
 $sql = "DELETE FROM inicio_de_curso WHERE data= '$fecha12'";
 echo mysqli_query($conexion, $sql);
?>