<?php

// Create connection
$conn1 = new mysqli("localhost", "username", "password", "database");
// Check connection
if ($conn1->connect_error) {
    die("Conexion fallida" . $conn->connect_error);
} 

$fecha = mysql_real_escape_string($conn1, $_POST['databox']);
$tipoevento = mysql_real_escape_string($conn1, $_POST['tipoEventos']);
$otro = mysql_real_escape_string($conn1, $_POST['otroTipoEventos']);
$materia = mysql_real_escape_string($conn1, $_POST['materiabox']);
$asunto = mysql_real_escape_string($conn1, $_POST['asuntobox']);
$tarea = mysql_real_escape_string($conn1, $_POST['tareabox']);
$evento = mysql_real_escape_string($conn1, $_POST['eventobox']);
//
$fecha = $_POST['databox'];
$tipoevento = $_POST['tipoEventos'];
$otro = $_POST['otroTipoEventos'];
$materia = $_POST['materiabox'];
$asunto = $_POST['asuntobox'];
$tarea = $_POST['tareabox'];
$evento = $_POST['eventobox'];

$sql = "DELETE FROM 3esoecalendar WHERE fecha='$fecha' AND tipoevento='$tipoevento' AND materia='$materia' AND asunto='$asunto'";
echo mysqli_query($conn1,$sql);
$conn1->close();
?>