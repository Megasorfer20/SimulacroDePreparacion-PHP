<?php

$data = new Inventario();

$all = $data->get_inventario();
$producto = $data->obtener_producto();

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nuevo Inventario
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Inventario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/inventarios.php?op=Insert" method="POST">
        <div class="modal-body">
          
          <div class="mb-1 col-12">
            <label for="id_producto" class="form-label">Producto</label>
            <select name="id_producto" id="id_producto" class="form-control">
                  <option value="">Selecciona un producto</option>
                  <?php 
                  foreach($producto as $key => $valuePro){
                  ?>
                  <option value="<?= $valuePro["producto_id"];?>"><?= $valuePro["nombre_producto"];?></option>
                  <?php } ?>
                </select> 
          </div>

              <div class="mb-1 col-12">
                <label for="cantidad_inicial" class="form-label">Cantidad Inicial</label>
                <input 
                  type="number"
                  id="cantidad_inicial"
                  name="cantidad_inicial"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="cantidad_ingresos" class="form-label">Cantidad Ingresos</label>
                <input 
                  type="number"
                  id="cantidad_ingresos"
                  name="cantidad_ingresos"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="cantidad_salidas" class="form-label">Cantidad Salidas</label>
                <input 
                  type="number"
                  id="cantidad_salidas"
                  name="cantidad_salidas"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="fecha_inventario" class="form-label">Fecha</label>
                <input 
                  type="date"
                  id="fecha_inventario"
                  name="fecha_inventario"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="tipo_operacion" class="form-label">Tipo Operacion</label>
                <input 
                  type="text"
                  id="tipo_operacion"
                  name="tipo_operacion"
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