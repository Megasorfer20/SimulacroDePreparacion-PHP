<?php

$url = "http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/inventarios.php?op=GetAll";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));

?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Alquileres</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Cantidad Inicial</th>
                    <th>Cantidad Ingresos</th>
                    <th>Cantidad Salidas</th>
                    <th>Cantidad Final</th>
                    <th>Fecha Inventario</th>
                    <th>Tipo Operacion</th>
                    <th>Borrar</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($output as $out){
                  ?>

                  <tr>
                    <td><?= $out->nombre_producto; ?></td>
                    <td><?= $out->cantidad_inicial; ?></td>
                    <td><?= $out->cantidad_ingresos; ?></td>
                    <td><?= $out->cantidad_salidas; ?></td>
                    <td><?= $out->cantidad_final; ?></td>
                    <td><?= $out->fecha_inventario; ?></td>
                    <td><?= $out->tipo_operacion; ?></td>
                    <td> <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/inventarios.php?op=Delete" method="POST">
                          <input type="hidden" name="inventario_id" value="<?= $out->inventario_id ?>">
                          <input type="submit" name="borrar" class="btn btn-danger" value="Borrar">
                          </form>
                    </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Producto</th>
                    <th>Cantidad Inicial</th>
                    <th>Cantidad Ingresos</th>
                    <th>Cantidad Salidas</th>
                    <th>Cantidad Final</th>
                    <th>Fecha Inventario</th>
                    <th>Tipo Operacion</th>
                    <th>Borrar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>