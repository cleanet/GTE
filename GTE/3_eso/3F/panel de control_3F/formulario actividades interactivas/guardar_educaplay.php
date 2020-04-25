<?php
	$conexion = new mysqli("localhost","username","password","database");
	if (!$conexion) {
		die("Error al conectar en la base de datos: " .$conexion->connect_error);
	}
	$stmt=$conexion->prepare("INSERT INTO educaplay_act_3 (actividad) VALUES (?)");
	$stmt->bind_param("s",$valor);
	$valor=$_POST["input_educaplay1"];
	$ok=$stmt->execute();
	if($ok==1){
		echo 1;
	}else{
		echo 0;
	}
	$stmt->close();
	$conexion->close();
?>
