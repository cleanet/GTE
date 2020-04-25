<?php
$conn = new mysqli("localhost","username","password","database");
// Check connection
if (!$conn) {
    die("Error: " . $conn->connect_error);
} 
$fecha12= $_POST['seleccionar_fecha'];
$sql = " INSERT INTO vacaciones_de_pascua (data) VALUES ('$fecha12')";
echo mysqli_query($conn,$sql);
?>