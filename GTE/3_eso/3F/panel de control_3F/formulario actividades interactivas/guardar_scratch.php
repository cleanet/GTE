<?php
	$conexion = new mysqli("localhost","username","password","database");
	if (!$conexion) {
		die("Error al conectar en la base de datos: " .$conexion->connect_error);
	}
	$stmt=$conexion->prepare("INSERT INTO scratch_act_3 (actividad) VALUES (?)");
	$valor=$_POST["input_scratch1"];
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
