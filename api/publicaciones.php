<?php 
    session_start();
    require_once '../config/conexion.php';
    $accion = $_REQUEST['accion'];
    
    if ($_SESSION['sesion_iniciada'] == 1) {
        if ($accion == 'leer') {
            $out = [];
            $res = $conn->query("SELECT * FROM publicaciones");
            while($row = $res->fetch_assoc()){
                $row['acciones'] = "<button class='editarbtn btn btn-warning btn-sm btnEditar' 
                data-id='".$row['id']."' 
                data-usuario_id='".$row['usuario_id']."'  
                data-titulo='".$row['titulo']."'
                data-contenido='".$row['contenido']."'>Editar</button>

                <button class='btn btn-danger btn-sm btnEliminar' 
                data-id='".$row['id']."'>Eliminar</button>";
                
                $out[] = $row;
            }
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($out);
            exit;
        }
        if ($accion == 'registrar') {
            $usuario_id = $_REQUEST['usuario_id'];
            $titulo = $_REQUEST['titulo'];
            $contenido = $_REQUEST['contenido'];

            $validar_existencia = "SELECT * FROM publicaciones WHERE titulo = '$titulo'";
            $result = $conn->query($validar_existencia);

            if($result->num_rows > 0){
                echo "existe";
                exit;
            }

            $existencia_usuario = "SELECT * FROM usuarios WHERE id = '$usuario_id' ";
            $result_usuario = $conn->query($existencia_usuario);
            if($result_usuario->num_rows == 0){
                echo "no_usuario";
                exit;
            }

            $sql = "INSERT INTO publicaciones (usuario_id, titulo, contenido, fecha_publicacion) VALUES ('$usuario_id','$titulo','$contenido', NOW())";
            $conn->query($sql);
            echo "exito";
        }

            
        
        if ($accion == "editar"){
            $id = $_REQUEST['id'];
            $usuario_id = $_REQUEST['usuario_id'];
            $titulo = $_REQUEST['titulo'];
            $contenido = $_REQUEST['contenido'];


            $sql = "UPDATE publicaciones SET usuario_id = '$usuario_id', titulo='$titulo', contenido = '$contenido', fecha_publicacion = NOW() WHERE id = $id";
            if ($conn->query($sql)) {
                echo "exito";
            }else{
                echo "error";
            }   
        }

        if ($accion == "eliminar") {
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM publicaciones WHERE id=$id";
            $conn->query($sql);
        }
    }
    

?>