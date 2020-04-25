<?php
 $conexion = new mysqli("localhost","username","password","database");
 if (!$conexion) {
 	die("Error al conectar en la base de datos: ".$conexion->connect_error);
 }
 $table = array("vacaciones_de_pascua","vacaciones_de_navidad","dias_festivos","inicio_de_curso");
 foreach ($table as $tabla) {
 	$sql ="truncate $table";
 	echo mysqli_query($conexion,$sql);
 }


?>