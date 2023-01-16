

      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataProducto['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Codigo</label>
                  <input type="text" name="codigo" class="form-control" value="<?php echo $dataProducto['codigo']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo$dataProducto['nombre']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Precio:</label>
                  <input type="number" name="precio" class="form-control" value="<?php echo $dataProducto['precio']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Cantidad:</label>
                  <input type="number" name="cantidad" class="form-control" value="<?php echo $dataProducto['cantidad']; ?>" required="true">
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>
