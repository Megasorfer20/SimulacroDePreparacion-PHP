<?php

$data = new Alquiler();

$all = $data->get_alquiler();
$cliente = $data->obtener_cliente();
$empleado = $data->obtener_empleado();

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nuevo Alquiler
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Alquiler</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/alquileres.php?op=Insert" method="POST">
        <div class="modal-body">
          
          <div class="mb-1 col-12">
            <label for="id_cliente" class="form-label">Cliente</label>
            <select name="id_cliente" id="id_cliente" class="form-control">
                  <option value="">Selecciona un cliente</option>
                  <?php 
                  foreach($cliente as $key => $valueC){
                  ?>
                  <option value="<?= $valueC["cliente_id"];?>"><?= $valueC["nombre_cliente"];?></option>
                  <?php } ?>
                </select> 
          </div>
                  <div class="mb-1 col-12">
                    <label for="id_empleado" class="form-label">Empleado</label>
                    <select name="id_empleado" id="id_empleado" class="form-control">
                      <option value="">Selecciona un Empleado</option>
                      <?php 
                      foreach($empleado as $key => $valueE){
                      ?>
                      <option value="<?= $valueE["empleado_id"];?>"><?= $valueE["nombre_empleado"];?></option>
                      <?php } ?>
                    </select>
                  </div>

              <div class="mb-1 col-12">
                <label for="fecha_salida" class="form-label">Fecha</label>
                <input 
                  type="date"
                  id="fecha_salida"
                  name="fecha_salida"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="hora_salida" class="form-label">Hora</label>
                <input 
                  type="time"
                  id="hora_salida"
                  name="hora_salida"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="subtotalPeso" class="form-label">Subtotal Peso</label>
                <input 
                  type="number"
                  id="subtotalPeso"
                  name="subtotalPeso"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="placaTransporte" class="form-label">Placa Transporte</label> 
                <input 
                  type="text"
                  id="placaTransporte"
                  name="placaTransporte"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="observaciones_salida" class="form-label">Observaciones</label>
                <input 
                  type="text"
                  id="observaciones_salida"
                  name="observaciones_salida"
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