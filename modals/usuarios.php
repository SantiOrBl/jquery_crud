<!-- Modal Agregar -->
  <div class="modal fade" id="modalAgregarUsuarios" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formAgregarUsuario">
          <div class="modal-header">
            <h5 class="modal-title">Agregar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="number" name="edad" class="form-control mb-2" placeholder="Edad" required>
            <input type="password" name="contrasena" class="form-control mb-2" placeholder="contraseña" required>
            <input type="password" name="confirmacion" class="form-control mb-2" placeholder="confirmación contraseña" required>
            <input type="number" name="rol_id" class="form-control mb-2" placeholder="Id rol" required>
            <input type="hidden" name="accion" value="registrar">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Editar -->
  <div class="modal fade" id="modalEditarUsuarios" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formEditarUsuario">
          <input type="hidden" name="id" id="editId">
          <div class="modal-header">
            <h5 class="modal-title">Editar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="text" name="nombre" id="editNombre" class="form-control mb-2" required>
            <input type="email" name="email" id="editEmail" class="form-control mb-2" required>
            <input type="number" name="edad" id="editEdad" class="form-control mb-2" required>
            <input type="number" name="rol_id" id="editRol_id" class="form-control mb-2" required>
            <input type="hidden" name="accion" id="accion" value="editar"/>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>