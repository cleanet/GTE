<?php
$conexion = new mysqli("localhost","username","password","database");
if (!$conexion) {
	die("Error al conectar con la DB: ". $conexion->error_connect);
}

$sql = "truncate educaplay_act";
echo mysqli_query($conexion, $sql);
?>