<?php

$data = new Devolucion();

$all = $data->get_devolucion();
$salida = $data-> obtener_salida();
$cliente = $data->obtener_cliente();
$empleado = $data->obtener_empleado();

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nueva Devolución
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nueva Devolución</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/devoluciones.php?op=Insert" method="POST">
        <div class="modal-body">

                <div class="mb-1 col-12">
                    <label for="id_salida" class="form-label">Alquiler</label>
                    <select name="id_salida" id="id_salida" class="form-control">
                        <option value="">Selecciona un Alquiler</option>
                        <?php 
                        foreach($salida as $key => $valueC){
                        ?>
                        <option value="<?= $valueC["salida_id"];?>"><?= $valueC["salida_id"];?></option>
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
                <label for="fecha_entrada" class="form-label">Fecha</label>
                <input 
                  type="date"
                  id="fecha_entrada"
                  name="fecha_entrada"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="hora_entrada" class="form-label">Hora</label>
                <input 
                  type="time"
                  id="hora_entrada"
                  name="hora_entrada"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="observaciones_entrada" class="form-label">Observaciones</label>
                <input 
                  type="text"
                  id="observaciones_entrada"
                  name="observaciones_entrada"
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