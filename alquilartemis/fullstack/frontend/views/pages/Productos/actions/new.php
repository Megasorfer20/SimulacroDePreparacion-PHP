<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nuevo Producto
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/productos.php?op=Insert" method="POST">
        <div class="modal-body">
              <div class="mb-1 col-12">
                <label for="nombre_producto" class="form-label">Nombre</label>
                <input 
                  type="text"
                  id="nombre_producto"
                  name="nombre_producto"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="precio_producto" class="form-label">Precio</label>
                <input 
                  type="number"
                  id="precio_producto"
                  name="precio_producto"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="peso_producto" class="form-label">Peso del Producto</label>
                <input 
                  type="number"
                  id="peso_producto"
                  name="peso_producto"
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