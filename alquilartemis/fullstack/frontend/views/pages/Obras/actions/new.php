<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nueva Obra
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Obra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/obras.php?op=Insert" method="POST">
        <div class="modal-body">
              <div class="mb-1 col-12">
                <label for="nombre_obra" class="form-label">Nombre</label>
                <input 
                  type="text"
                  id="nombre_obra"
                  name="nombre_obra"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="fecha_obra" class="form-label">Fecha</label>
                <input 
                  type="date"
                  id="fecha_obra"
                  name="fecha_obra"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="hora_obra" class="form-label">Hora</label>
                <input 
                  type="time"
                  id="hora_obra"
                  name="hora_obra"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="observaciones_obra" class="form-label">Observaciones</label>
                <input 
                  type="text"
                  id="observaciones_obra"
                  name="observaciones_obra"
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