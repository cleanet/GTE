<?php

// Create connection
$conn = new mysqli("localhost", "username", "password", "database");
// Check connection
if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
} 
$fecha = $_POST['databox'];
$tipoEvento = $_POST['tipoEventos'];
$otro = $_POST['otroTipoEventos'];
$materia = $_POST['materiabox'];
$asunto = $_POST['asuntobox'];
$tarea = $_POST['tareabox'];
$evento = $_POST['eventobox'];
mysqli_escape_string($_POST['databox']);
mysqli_escape_string($_POST['tipoEventos']);
mysqli_escape_string($_POST['otroTipoEventos']);
mysqli_escape_string($_POST['materiabox']);
mysqli_escape_string($_POST['asuntobox']);
mysqli_escape_string($_POST['tareabox']);
mysqli_escape_string($_POST['eventobox']);

$sql = " INSERT INTO 4esoacalendar (fecha, tipoevento, otro, materia, asunto, tarea, evento) VALUES ('$fecha','$tipoEvento','$otro','$materia','$asunto','$tarea','$evento')";
echo mysqli_query($conn,$sql);
$conn->close();
?>