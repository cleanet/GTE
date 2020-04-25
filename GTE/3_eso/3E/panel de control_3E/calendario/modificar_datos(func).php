<?php

// Create connection
$conn = new mysqli("localhost", "username", "password", "database");
// Check connection
if ($conn->connect_error) {
    die("Desconectado" . $conn->connect_error);
} 
$id = $_POST['seleccionar_id'];
mysql_real_escape_string($conn, $_POST['seleccionar_id']);
$tipoevento = $_POST['tipoEventos'];
$otro = $_POST['otroTipoEventos'];
$materia = $_POST['materiabox'];
$asunto = $_POST['asuntobox'];
$tarea = $_POST['tareabox'];
$evento = $_POST['eventobox'];
mysql_real_escape_string($conn, $_POST['tipoEventos']);
mysql_real_escape_string($conn, $_POST['otroTipoEventos']);
mysql_real_escape_string($conn, $_POST['materiabox']);
mysql_real_escape_string($conn, $_POST['asuntobox']);
mysql_real_escape_string($conn, $_POST['tareabox']);
mysql_real_escape_string($conn, $_POST['eventobox']);
$sql = "UPDATE 3esoecalendar SET tipoevento='$tipoevento', otro='$otro', materia='$materia', asunto='$asunto', tarea='$tarea', evento='$evento' WHERE id='$id'";
echo mysqli_query($conn, $sql);
$conn->close();
?>