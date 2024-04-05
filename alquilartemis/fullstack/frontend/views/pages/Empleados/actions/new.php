<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
  Nuevo Empleado
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/empleados.php?op=Insert" method="POST">
        <div class="modal-body">
              <div class="mb-1 col-12">
                <label for="nombre_empleado" class="form-label">Nombre</label>
                <input 
                  type="text"
                  id="nombre_empleado"
                  name="nombre_empleado"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="edad_empleado" class="form-label">Edad</label>
                <input 
                  type="number"
                  id="edad_empleado"
                  name="edad_empleado"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="telefono_empleado" class="form-label">Teléfono</label>
                <input 
                  type="number"
                  id="telefono_empleado"
                  name="telefono_empleado"
                  class="form-control"  
                />
              </div>
              
              <div class="mb-1 col-12">
                <label for="cedula_empleado" class="form-label">Cédula</label>
                <input 
                  type="number"
                  id="cedula_empleado"
                  name="cedula_empleado"
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