<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CRUD con PHP, Bootstrap, jQuery y mPDF</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/app.js"></script>
</head>
<body class="container py-4">

  <h2 class="mb-4">Gestión de Usuarios</h2>

  <!-- Botón agregar -->
  <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalAgregar">Agregar Usuario</button>
  <a href="api/pdf.php" target="_blank" class="btn btn-danger mb-3">Exportar PDF</a>

  <!-- Tabla usuarios -->
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th><th>Acciones</th>
      </tr>
    </thead>
    <tbody id="tablaUsuarios"></tbody>
  </table>

  <!-- Modal Agregar -->
  <div class="modal fade" id="modalAgregar" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formAgregar">
          <div class="modal-header">
            <h5 class="modal-title">Agregar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="number" name="edad" class="form-control mb-2" placeholder="Edad" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Editar -->
  <div class="modal fade" id="modalEditar" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formEditar">
          <input type="hidden" name="id" id="editId">
          <div class="modal-header">
            <h5 class="modal-title">Editar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="text" name="nombre" id="editNombre" class="form-control mb-2" required>
            <input type="email" name="email" id="editEmail" class="form-control mb-2" required>
            <input type="number" name="edad" id="editEdad" class="form-control mb-2" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
