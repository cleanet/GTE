<?php
$conexion = new mysqli("localhost","username","password","database");
if (!$conexion) {
	die("Error al conectar con la DB:". $conexion->connect_error);
}
mysql_real_escape_string($conexion, $_POST['identidad_educaplay']);
$id=$_POST['identidad_educaplay'];
$sql = "DELETE FROM educaplay_act_4 WHERE ID='$id'";
echo mysqli_query($conexion,$sql);
?>