<?php
$conexion = new mysqli("localhost","username","password","database");
if (!$conexion) {
	die("Error al conectar con la DB: ". $conexion->error_connect);
}
mysql_real_escape_string($conexion, $_POST['identidad_scratch']);
$id = $_POST['identidad_scratch'];
$sql = "DELETE FROM scratch_act_4 WHERE ID='$id'";
echo mysqli_query($conexion, $sql);
?>