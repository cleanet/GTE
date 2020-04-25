<?php
	$conexion = new mysqli("localhost","username","password","database");
	if(!$conexion){
		die("Error en la conexion".$conexion->error_connect);
	}
	$stmt=$conexion->prepare("DELETE FROM scratch_act_3 WHERE ID=?");
	$id=$_POST["identidad_scratch"];
	$stmt->bind_param("s",$id);
	$ok=$stmt->execute();
	if($ok){
		echo 1;
	}else{
		echo 0;
	}
?>
