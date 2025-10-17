<?php 
    session_start();
    require_once '../config/conexion.php';
    $accion = $_REQUEST['accion'];
    
    if ($_SESSION['sesion_iniciada'] == 1) {
        if ($accion == 'leer') {
            $out = [];
            $res = $conn->query("SELECT * FROM comentarios");
            while($row = $res->fetch_assoc()){
                $row['acciones'] = "<button class='editarbtn btn btn-warning btn-sm btnEditar' 
                data-id='".$row['id']."' 
                data-publicacion_id='".$row['publicacion_id']."'
                data-usuario_id='".$row['usuario_id']."'  
                data-comentario='".$row['comentario']."'>Editar</button>

                <button class='btn btn-danger btn-sm btnEliminar' 
                data-id='".$row['id']."'>Eliminar</button>";
                
                $out[] = $row;
            }
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($out);
            exit;


        }
        if ($accion == 'registrar') {
            $publicacion_id = $_REQUEST['publicacion_id'];
            $usuario_id = $_REQUEST['usuario_id'];
            $comentario = $_REQUEST['comentario'];


            $validar_publicacion = "SELECT * FROM publicaciones WHERE id = '$publicacion_id'";
            $result = $conn->query($validar_publicacion);

            if($result->num_rows == 0){
                echo "no_publicacion";
                exit;
            }

            $existencia_usuario = "SELECT * FROM usuarios WHERE id = '$usuario_id' ";
            $result_usuario = $conn->query($existencia_usuario);
            if($result_usuario->num_rows == 0){
                echo "no_usuario";
                exit;
            }

            $sql = "INSERT INTO comentarios (publicacion_id, usuario_id, comentario, fecha_comentario) VALUES ('$publicacion_id','$usuario_id','$comentario', NOW())";
            $conn->query($sql);
            echo "exito";
        }

            
        
        if ($accion == "editar"){
            $id = $_REQUEST['id'];
            $publicacion_id = $_REQUEST['publicacion_id'];
            $usuario_id = $_REQUEST['usuario_id'];
            $comentario = $_REQUEST['comentario'];



            $sql = "UPDATE comentarios SET publicacion_id = '$publicacion_id', usuario_id='$usuario_id', comentario = '$comentario', fecha_comentario = NOW() WHERE id = $id";
            if ($conn->query($sql)) {
                echo "exito";
            }else{
                echo "error";
            }   
        }

        if ($accion == "eliminar") {
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM comentarios WHERE id=$id";
            $conn->query($sql);
        }
    }
    

?>