
<form name="form-data" action="GuardarP.php" method="POST">

    <div class="row">
      <div class="col-md-12">
         
<label for="nombre" class="form-label">Codigo *</label>
<input type="text"  id="nombre" name="codigo" class="form-control" required>
      </div>

      <div class="col-md-12 mt-2">
      <label for="descripcion" class="form-label">Nombre</label>
<input type="text"  id="descripcion" name="nombre" class="form-control" required >
      </div>

      <div class="col-md-12 mt-2">
        
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
    <option selected>Seleccione uno...</option>
    <option value="Snacks">Snacks</option>
    <option value="Limpieza">Limpieza y del hogar</option>
    <option value="Quesos y encurtidos">Quesos y encurtidos</option>
    <option value="Mascotas">Mascotas</option>
    <option value="Salsas y arroz">Salsas y arroz</option>
    <option value="Lacteos">Lacteos</option>
    <option value="Panaderia">Panaderia</option>
    <option value="Bebidas">Bebidas</option>
    <option value="Conservas">Conservas</option>

  </select>
      </div>

      <div class="col-md-12 mt-2">
        
<label for="precio" class="form-label">Precio *</label>
<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="number"  id="precio" name="precio" class="form-control" required>
  <span class="input-group-text">.00</span>
</div>
</div>


      <div class="col-md-12 mt-2">
<label for="cantidad" class="form-label">Cantidad en stock</label>
<input type="number"  id="cantidad" name="cantidad" class="form-control" required>
      </div>

      <div class="col-md-12 mt-2">
        
<label for="categorias" class="form-label">Proveedor *</label>
<select name="proveedor" id="proveedor" class="form-control" required>
    <option selected>Seleccione uno...</option>
    <option value="Sate Alimentos">Sate Alimentos</option>
    <option value="Nutrientessa">Nutrientessa</option>
    <option value="Verde Alimentos">Verde Alimentos</option>
    <option value="Sea Food">Sea Food</option>
    <option value="MaxClean">MaxClean</option>
    <option value="Frutacci">Frutacci</option>
    <option value="CandyMania">CandyMania</option>
    <option value="Floritte">Floritte</option>
    <option value="Duronco">Duronco</option>
</select>
      </div>

    </div>
      <div class="row justify-content-start text-center mt-5">
          <div class="col-12">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Guardar
              </button>
          </div>
      </div>
</form>


