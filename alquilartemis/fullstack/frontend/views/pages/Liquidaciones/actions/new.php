<?php

$data = new Liquidacion();

$all = $data->get_liquidacion();
$cliente = $data->obtener_cliente();

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nueva Liquidación
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nueva Liquidación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/liquidaciones.php?op=Insert" method="POST">
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
                <label for="producto_liquidado" class="form-label">Producto Liquidado</label>
                <input 
                  type="text"
                  id="producto_liquidado"
                  name="producto_liquidado"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="fecha_liquidacion" class="form-label">Fecha</label>
                <input 
                  type="date"
                  id="fecha_liquidacion"
                  name="fecha_liquidacion"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="precio_total" class="form-label">Precio Total</label>
                <input 
                  type="number"
                  id="precio_total"
                  name="precio_total"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="metodo_pago" class="form-label">Método de Pago</label> 
                <select name="metodo_pago" id="metodo_pago" class="form-control">
                  <option value="">Selecciona un método de pago</option>
                  <option value="Tarjeta de Credito">Tarjeta de Crédito</option>
                  <option value="Tarjeta Debito">Tarjeta Débito</option>
                  <option value="Nequi">Nequi</option>
                  <option value="Efectivo">Efectivo</option>
                  <option value="PayPal">PayPal</option>
                </select> 
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