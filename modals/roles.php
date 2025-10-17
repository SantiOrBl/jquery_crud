
  <div class="modal fade" id="modalAgregarRoles" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formAgregarRol">
          <div class="modal-header">
            <h5 class="modal-title">Agregar Rol</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>
            <input type="text" name="descripcion" class="form-control mb-2" placeholder="Descripcion" required>
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
  <div class="modal fade" id="modalEditarRoles" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formEditarRol">
          <input type="hidden" name="id" id="editId">
          <div class="modal-header">
            <h5 class="modal-title">Editar Rol</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="text" name="nombre" id="editNombre" class="form-control mb-2" required>
            <input type="text" name="descripcion" id="editDescripcion" class="form-control mb-2" required>
            <input type="hidden" name="accion" id="accion" value="editar"/>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>