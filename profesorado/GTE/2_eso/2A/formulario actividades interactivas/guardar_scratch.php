<?php
	session_start();
	$conexion = new mysqli("localhost","username","password","database");

	if (!$conexion) {
		die("Error al conectar en la base de datos: " .$conexion->connect_error);
	}
	mysql_real_escape_string($conexion, $_POST['input_scratch1']);
	$actividad2= $_POST['input_scratch1'];
	$sql = "INSERT INTO scratch_act_2 (actividad) VALUES ('".$actividad2."')";
	echo mysqli_query($conexion,$sql);		
?>