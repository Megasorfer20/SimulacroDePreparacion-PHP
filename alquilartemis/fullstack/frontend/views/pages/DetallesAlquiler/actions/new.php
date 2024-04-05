<?php

$data = new DetallesAlquiler();

$all = $data->get_detalles_alquiler();

$alquiler = $data->obtener_alquiler();
$producto = $data->obtener_producto();
$obra = $data->obtener_obra();
$empleado = $data->obtener_empleado();

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nuevo Detalle del Alquiler
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Detalle del Alquiler</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/detallesAlquileres.php?op=Insert" method="POST">
        <div class="modal-body">
          
          <div class="mb-1 col-12">
            <label for="id_salida" class="form-label">Alquiler</label>
            <select name="id_salida" id="id_salida" class="form-control">
                  <option value="">Selecciona la ID del Alquiler</option>
                  <?php 
                  foreach($alquiler as $key => $valueAl){
                  ?>
                  <option value="<?= $valueAl["salida_id"];?>"><?= $valueAl["salida_id"];?></option>
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
                  <label for="id_empleado" class="form-label">Empleado</label>
                  <select name="id_empleado" id="id_empleado" class="form-control">
                    <option value="">Selecciona el Empleado</option>
                    <?php 
                    foreach($empleado as $key => $valueEmp){
                    ?>
                    <option value="<?= $valueEmp["empleado_id"];?>"><?= $valueEmp["nombre_empleado"];?></option>
                    <?php } ?>
                  </select>
                </div>
              <div class="mb-1 col-12">
                <label for="cantidad_salida" class="form-label">Cantidad de Salida</label>
                <input 
                  type="number"
                  id="cantidad_salida"
                  name="cantidad_salida"
                  class="form-control"  
                />
              </div>
              <div class="mb-1 col-12">
                <label for="cantidad_propia_salida" class="form-label">Cantidad Propia Salida</label>
                <input 
                  type="number"
                  id="cantidad_propia_salida"
                  name="cantidad_propia_salida"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="cantidad_subalquilada_salida" class="form-label">Cantidad Subalquilada Salida</label>
                <input 
                  type="number"
                  id="cantidad_subalquilada_salida"
                  name="cantidad_subalquilada_salida"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="valor_unidad" class="form-label">Valor Unidad</label>
                <input 
                  type="number"
                  id="valor_unidad"
                  name="valor_unidad"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="fecha_standBye" class="form-label">Fecha StandBy</label> 
                <input 
                  type="date"
                  id="fecha_standBye"
                  name="fecha_standBye"
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