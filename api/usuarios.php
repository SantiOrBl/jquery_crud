<?php 
    session_start();
    require_once '../config/conexion.php';
    $accion = $_REQUEST['accion'];
    
    if ($_SESSION['sesion_iniciada'] == 1) {
        if ($accion == 'leer') {
            $out = [];
            $res = $conn->query("SELECT * FROM usuarios");
            while($row = $res->fetch_assoc()){
                $row['acciones'] = "<button class='btn btn-warning btn-sm btnEditar' 
                data-id='".$row['id']."' 
                data-nombre='".$row['nombre']."' 
                data-email='".$row['email']."' 
                data-edad='".$row['edad']."'
                data-rol_id='".$row['rol_id']."'>Editar</button>

                <button class='btn btn-danger btn-sm btnEliminar' 
                data-id='".$row['id']."'>Eliminar</button>";
                
                $out[] = $row;
            }
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($out);
            exit;

        }
        
        if ($accion == 'registrar') {
            $nombre = $_REQUEST['nombre'];
            $email = $_REQUEST['email'];
            $edad = $_REQUEST['edad'];
            $contrasenia = $_REQUEST['contrasena'];
            $rol_id = $_REQUEST['rol_id'];


            $existencia_rol = "SELECT * FROM roles WHERE id = '$rol_id' ";
            $result_rol = $conn->query($existencia_rol);
            if($result_rol->num_rows == 0){
                echo "no_rol";
                exit;
            }

            $validar_existencia = "SELECT * FROM usuarios WHERE email = '$email' ";
            $result = $conn->query($validar_existencia);
            if($result->num_rows > 0){
                echo "existe";
                exit;
            }

            $sql = "INSERT INTO usuarios (nombre, email, edad, fecha_creacion,password,rol_id) VALUES ('$nombre','$email','$edad', NOW(), '$contrasenia','$rol_id')";
            $conn->query($sql);
            echo "exito";
                
            
        }


        if ($accion == "editar"){
            $id = $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $email = $_REQUEST['email'];
            $edad = $_REQUEST['edad'];
            $rol_id = $_REQUEST['rol_id'];

            $sql = "UPDATE usuarios SET nombre = '$nombre', email='$email', edad = '$edad', rol_id='$rol_id' WHERE id = $id";
            if ($conn->query($sql)) {
                echo "exito";
            }else{
                echo "error";
            }   
        }

        if ($accion == "eliminar") {
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM usuarios WHERE id=$id";
            $conn->query($sql);
        }
    }
?>