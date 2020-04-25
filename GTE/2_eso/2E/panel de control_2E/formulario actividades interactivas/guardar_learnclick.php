<?php
	$conexion = new mysqli("localhost","username","password","database");
	if (!$conexion) {
		die("Error al conectar en la base de datos: " .$conexion->connect_error);
	}
	$stmt=$conexion->prepare("INSERT INTO learnclick_act_2 (actividad) VALUES (?)");
	$valor=$_POST["input_learnclick1"];
	$stmt->bind_param("s",$valor);
	$ok=$stmt->execute();
	if($ok==1){
		echo 1;
	}else{
		echo 0;
	}
	$stmt->close();
	$conexion->close();
?>
