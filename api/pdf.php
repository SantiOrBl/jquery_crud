<?php
require_once __DIR__ . '/mpdf/vendor/autoload.php';
include("conexion.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

$html = "<h2 style='text-align:center;'>Reporte de Usuarios</h2>
<table border='1' width='100%' style='border-collapse:collapse;'>
<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th></tr>";

while($row = $result->fetch_assoc()) {
    $html .= "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['email']."</td>
                <td>".$row['edad']."</td>
              </tr>";
}

$html .= "</table>";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output("usuarios.pdf", "I");
?>
