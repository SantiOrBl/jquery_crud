
  <div class="modal fade" id="modalAgregarComentarios" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formAgregarComentario">
          <div class="modal-header">
            <h5 class="modal-title">Agregar Comentario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="publicacion_id" class="form-control mb-2" placeholder="Id publicacion" required>
            <input type="text" name="usuario_id" class="form-control mb-2" placeholder="Id comentador" required>
            <input type="text" name="comentario" class="form-control mb-2" placeholder="Comentario" required>
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
  <div class="modal fade" id="modalEditarComentarios" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formEditarComentario">
          <input type="hidden" name="id" id="editId">
          <div class="modal-header">
            <h5 class="modal-title">Editar Comentario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="number" name="publicacion_id" id="editPublicacion_id" class="form-control mb-2" required readonly>
            <input type="number" name="usuario_id" id="editUsuario_id" class="form-control mb-2" required readonly>
            <textarea name="comentario" id="editComentario" class="form-control mb-2" rows="4" required></textarea>

            <input type="hidden" name="accion" id="accion" value="editar"/>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>