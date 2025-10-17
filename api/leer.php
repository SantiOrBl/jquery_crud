<?php
include("conexion.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nombre']."</td>
            <td>".$row['email']."</td>
            <td>".$row['edad']."</td>
            <td>
              <button class='btn btn-warning btn-sm btnEditar' 
                data-id='".$row['id']."' 
                data-nombre='".$row['nombre']."' 
                data-email='".$row['email']."' 
                data-edad='".$row['edad']."'>Editar</button>
              <button class='btn btn-danger btn-sm btnEliminar' data-id='".$row['id']."'>Eliminar</button>
            </td>
          </tr>";
}
?>
