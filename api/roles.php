<?php 
    session_start();
    require_once '../config/conexion.php';
    $accion = $_REQUEST['accion'];
    
    if ($_SESSION['sesion_iniciada'] == 1) {
        if ($accion == 'leer') {
            $out = [];
            $res = $conn->query("SELECT * FROM roles");
            while($row = $res->fetch_assoc()){
                $row['acciones'] = "<button class='btn btn-warning btn-sm btnEditar' 
                data-id='".$row['id']."' 
                data-nombre='".$row['nombre']."'  
                data-descripcion='".$row['descripcion']."'>Editar</button>

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
            $descripcion = $_REQUEST['descripcion'];

            $validar_existencia = "SELECT * FROM roles WHERE nombre = '$nombre'";
            $result = $conn->query($validar_existencia);
            if($result->num_rows > 0){
                echo "existe";
            }else{
                $sql = "INSERT INTO roles (nombre, descripcion) VALUES ('$nombre','$descripcion')";
                $conn->query($sql);
                echo "exito";
            }

            
        }
        if ($accion == "editar"){
            $id = $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $descripcion = $_REQUEST['descripcion'];

            $sql = "UPDATE roles SET nombre = '$nombre', descripcion='$descripcion' WHERE id = $id";
            if ($conn->query($sql)) {
                echo "exito";
            }else{
                echo "error";
            }   
        }

        if ($accion == "eliminar") {
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM roles WHERE id=$id";
            $conn->query($sql);
        }
    }
?>