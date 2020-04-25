<?php
// Create connection
$conn = new mysqli("localhost","username","password","database");
// Check connection
if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
} 
mysqli_escape_string($conn, $_POST['materia']);
mysqli_escape_string($conn, $_POST['tema']);
mysqli_escape_string($conn, $_POST['enlace']);
$fecha= $_POST['materia'];
$materia= $_POST['tema'];
$tarea= $_POST['enlace'];

$sql = "INSERT INTO 4eso (materia, tema, enlace)
VALUES ('$fecha', '$materia', '$tarea')";

echo mysqli_query($conn, $sql);

$conn->close();
?>
