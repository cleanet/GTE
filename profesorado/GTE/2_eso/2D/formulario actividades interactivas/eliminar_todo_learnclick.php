<?php
$conexion = new mysqli("localhost","username","password","database");
if (!$conexion) {
	die("Error al conectar con la DB:". $conexion->connect_error);
}
$sql = "truncate learnclick_act_2";
echo mysqli_query($conexion, $sql);
?>