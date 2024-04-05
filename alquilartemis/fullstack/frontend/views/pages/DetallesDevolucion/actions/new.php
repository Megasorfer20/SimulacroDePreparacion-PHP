<?php

$data = new DetallesDevolucion();

$all = $data->get_detalles_devolucion();

$entrada = $data->obtener_entrada();
$producto = $data->obtener_producto();
$obra = $data->obtener_obra();


?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nuevo Detalle de la Devolución
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Detalle de la Devolucion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/detallesDevoluciones.php?op=Insert" method="POST">
        <div class="modal-body">
          
          <div class="mb-1 col-12">
            <label for="id_entrada" class="form-label">Entrada</label>
            <select name="id_entrada" id="id_entrada" class="form-control">
                  <option value="">Selecciona la ID de la entrada</option>
                  <?php 
                  foreach($entrada as $key => $valueAl){
                  ?>
                  <option value="<?= $valueAl["entrada_id"];?>"><?= $valueAl["entrada_id"];?></option>
                  <?php } ?>
                </select> 
          </div>
                <div class="mb-1 col-12">
                  <label for="id_producto" class="form-label">Producto</label>
                  <select name="id_producto" id="id_producto" class="form-control">
                    <option value="">Selecciona un Producto</option>
                    <?php 
                    foreach($producto as $key => $valuePro){
                    ?>
                    <option value="<?= $valuePro["producto_id"];?>"><?= $valuePro["nombre_producto"];?></option>
                    <?php } ?>
                  </select>
                  </div>
              <div class="mb-1 col-12">
                  <label for="id_obra" class="form-label">Obra</label>
                  <select name="id_obra" id="id_obra" class="form-control">
                    <option value="">Selecciona la obra del Cliente</option>
                    <?php 
                    foreach($obra as $key => $valueOb){
                    ?>
                    <option value="<?= $valueOb["obra_id"];?>"><?= $valueOb["nombre_obra"];?></option>
                    <?php } ?>
                  </select>
                </div>
              <div class="mb-1 col-12">
                <label for="cantidad_entrada" class="form-label">Cantidad de Entrada</label>
                <input 
                  type="number"
                  id="cantidad_entrada"
                  name="cantidad_entrada"
                  class="form-control"  
                />
              </div>
              <div class="mb-1 col-12">
                <label for="cantidad_propia_entrada" class="form-label">Cantidad Propia de Entrada</label>
                <input 
                  type="number"
                  id="cantidad_propia_entrada"
                  name="cantidad_propia_entrada"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="cantidad_subalquilada_entrada" class="form-label">Cantidad Subalquilada de Entrada</label>
                <input 
                  type="number"
                  id="cantidad_subalquilada_entrada"
                  name="cantidad_subalquilada_entrada"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="estado" class="form-label">Estado</label>
                <input 
                  type="text"
                  id="estado"
                  name="estado"
                  class="form-control"  
                />
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="Agregar" value="Agregar" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>