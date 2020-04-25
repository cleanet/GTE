<?php
 $conexion = new mysqli("localhost","username","password","database");
 if (!$conexion) {
 	die("Error al conectar en la base de datos: ".$conexion->connect_error);
 }
 $sql = "truncate inicio_de_curso";
 echo mysqli_query($conexion,$sql);
?>