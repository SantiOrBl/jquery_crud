
  <div class="modal fade" id="modalAgregarPublicaciones" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formAgregarPublicacion">
          <div class="modal-header">
            <h5 class="modal-title">Agregar Publicacion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="usuario_id" class="form-control mb-2" placeholder="Id autor" required>
            <input type="text" name="titulo" class="form-control mb-2" placeholder="Titulo" required>
            <input type="text" name="contenido" class="form-control mb-2" placeholder="Contenido" required>
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
  <div class="modal fade" id="modalEditarPublicaciones" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formEditarPublicacion">
          <input type="hidden" name="id" id="editId">
          <div class="modal-header">
            <h5 class="modal-title">Editar Publicacion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="usuario_id" id="editUsuario_id" class="form-control mb-2" required readonly>
            <input type="text" name="titulo" id="editTitulo" class="form-control mb-2" required>
            <textarea name="contenido" id="editContenido" class="form-control mb-2" rows="4" required></textarea>

            <input type="hidden" name="accion" id="accion" value="editar"/>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>