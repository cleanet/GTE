<?php
// Create connection
$conn = new mysqli("localhost","username","password","database");
// Check connection
if ($conn->connect_error) {
    die("Desconectado" . $conn->connect_error);
} 
$sql = "truncate 2eso";

echo mysqli_query($conn, $sql);

$conn->close();
?>
