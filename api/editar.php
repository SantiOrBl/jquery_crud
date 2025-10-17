<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];

$sql = "UPDATE usuarios SET nombre='$nombre', email='$email', edad='$edad' WHERE id=$id";
$conn->query($sql);
?>
