<?php

// Create connection
$conn = new mysqli("localhost", "username", "password", "database");
// Check connection
if ($conn->connect_error) {
    die("Desconectado" . $conn->connect_error);
} 
$materia = $_POST['materia'];
$tarea = $_POST['tarea'];
$enlace = $_POST['enlace'];
$id=$_POST['id'];
 $materia= mysqli_real_escape_string($conn, $_POST['materia']);
 $tarea= mysqli_real_escape_string($conn, $_POST['tema']);
 $enlace = mysqli_real_escape_string($conn, $_POST['enlace']);
 $id= mysqli_real_escape_string($conn, $_POST['id']);
$sql = "DELETE FROM 3eso WHERE id='$id'";

echo mysqli_query($conn, $sql);

$conn->close();
?>
