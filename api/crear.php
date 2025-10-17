<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];

$sql = "INSERT INTO usuarios (nombre, email, edad) VALUES ('$nombre','$email','$edad')";
$conn->query($sql);
?>
