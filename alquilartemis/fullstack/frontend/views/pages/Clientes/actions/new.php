<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nuevo Cliente
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/clientes.php?op=Insert" method="POST">
        <div class="modal-body">
              <div class="mb-1 col-12">
                <label for="nombre_cliente" class="form-label">Nombre</label>
                <input 
                  type="text"
                  id="nombre_cliente"
                  name="nombre_cliente"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="edad_cliente" class="form-label">Edad</label>
                <input 
                  type="number"
                  id="edad_cliente"
                  name="edad_cliente"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="telefono_cliente" class="form-label">Teléfono</label>
                <input 
                  type="number"
                  id="telefono_cliente"
                  name="telefono_cliente"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="cedula_cliente" class="form-label">Cédula</label>
                <input 
                  type="number"
                  id="cedula_cliente"
                  name="cedula_cliente"
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