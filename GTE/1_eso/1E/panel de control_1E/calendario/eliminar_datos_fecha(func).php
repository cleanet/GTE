<?php

// Create connection
$conn1 = new mysqli("localhost", "username", "password", "database");
// Check connection
if ($conn1->connect_error) {
    die("Conexion fallida" . $conn->connect_error);
} 

$fecha = mysql_real_escape_string($conn1, $_POST['seldatabox']);
$tipoevento = mysql_real_escape_string($conn1, $_POST['tipoEventos']);
$otro = mysql_real_escape_string($conn1, $_POST['otroTipoEventos']);
$materia = mysql_real_escape_string($conn1, $_POST['materiabox']);
$asunto = mysql_real_escape_string($conn1, $_POST['asuntobox']);
$tarea = mysql_real_escape_string($conn1, $_POST['tareabox']);
$evento = mysql_real_escape_string($conn1, $_POST['eventobox']);
//
$fecha = $_POST['databox'];
$tipoevento = $_POST['eliminar_tipoEventos'];
$otro = $_POST['otroTipoEventos'];
$materia = $_POST['materiabox'];
$asunto = $_POST['asuntobox'];
$tarea = $_POST['tareabox'];
$evento = $_POST['eventobox'];

$sql = "DELETE FROM 1esoecalendar WHERE fecha='$fecha'";
echo mysqli_query($conn1,$sql);
$conn1->close();
?>