<?php

// Create connection
$conn1 = new mysqli("localhost", "username", "password", "database");
// Check connection
if ($conn1->connect_error) {
    die("Conexion fallida" . $conn->connect_error);
} 
$sql = "truncate 2esobcalendar";
echo mysqli_query($conn1,$sql);
$conn1->close();
?>