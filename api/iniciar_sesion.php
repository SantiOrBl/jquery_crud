<?php 
session_start();
include("../config/conexion.php");

$correo         = $_POST['correo'];
$contrasenia    = $_POST['contrasenia'];

$sql = "SELECT * FROM usuarios WHERE email = '$correo' AND password = '$contrasenia'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $datos = $result->fetch_assoc();
    $_SESSION['sesion_iniciada'] = 1;
    $_SESSION['usuario'] = $datos['email'];
    $_SESSION['nombre_usuario'] = $datos['nombre'];
    $_SESSION['fecha_creacion_usuario'] = $datos['fecha_creacion'];
    $actualizar_conexion = "UPDATE usuarios SET ultima_conexion = NOW() WHERE id =".$datos['id'];
    $conn->query($actualizar_conexion);
    echo "ok";
}else{
    echo "error";
}
?>