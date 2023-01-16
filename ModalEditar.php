
<div class="modal fade" id="editChildresn<?php echo $dataProducto['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataProducto['id']; ?>">
        <div class="modal-body" id="cont_modal">
          
  <div class="container text-center">
  <div class="row row-cols-2">

    <div class="col">
    <label for="recipient-name" class="col-form-label">Codigo</label>
    <input type="text" name="codigo" class="form-control" value="<?php echo $dataProducto['codigo']; ?>" required="true">
    </div>

    <div class="col">
    <label for="recipient-name" class="col-form-label">Nombre:</label>
    <input type="text" name="nombre" class="form-control" value="<?php echo $dataProducto['nombre']; ?>" required="true">
    </div>

    <div class="col">
    <label for="recipient-name" class="col-form-label">Precio:</label>
    <input type="number" name="precio" class="form-control" value="<?php echo $dataProducto['precio']; ?>" required="true">
    </div>

    <div class="col">
                  <label for="recipient-name" class="col-form-label">Cantidad:</label>
                  <input type="number" name="cantidad" class="form-control" value="<?php echo $dataProducto['cantidad']; ?>" required="true">
    </div>

    <div class="col">
                  <label for="recipient-name" class="col-form-label">Cantidad:</label>
                  <input type="number" name="cantidad" class="form-control" value="<?php echo $dataProducto['cantidad']; ?>" required="true">
    </div>

    <div class="col">
                  <label for="recipient-name" class="col-form-label">Cantidad:</label>
                  <input type="number" name="cantidad" class="form-control" value="<?php echo $dataProducto['cantidad']; ?>" required="true">
    </div>
    
   
  </div>

  
  <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
</div>
    </div>
  </div>
</div>
</form>

