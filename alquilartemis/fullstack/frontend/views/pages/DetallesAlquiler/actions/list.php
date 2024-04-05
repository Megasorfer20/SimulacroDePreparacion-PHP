<?php

$url = "http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/detallesAlquileres.php?op=GetAll";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));

?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Detalles del Alquiler</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Alquiler</th>
                    <th>Producto</th>
                    <th>Obra</th>
                    <th>Empleado</th>
                    <th>Cantidad</th>
                    <th>Cantidad Propia</th>
                    <th>Cantidad Subalquilada</th>
                    <th>Valor Unitario</th>
                    <th>Fecha de StandBye</th>
                    <th>Estado del Producto</th>
                    <th>Valor Total</th>
                    <th>Borrar</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($output as $out){
                  ?>

                  <tr>
                    <td><?= $out->salida_id; ?></td>
                    <td><?= $out->nombre_producto; ?></td>
                    <td><?= $out->nombre_obra; ?></td>
                    <td><?= $out->nombre_empleado; ?></td>
                    <td><?= $out->cantidad_salida; ?></td>
                    <td><?= $out->cantidad_propia_salida; ?></td>
                    <td><?= $out->cantidad_subalquilada_salida; ?></td>
                    <td>$ <?= $out->valor_unidad; ?></td>
                    <td><?= $out->fecha_standBye; ?></td>
                    <td><?= $out->estado; ?></td>
                    <td>$ <?= $out->valor_total; ?></td>
                    <td> <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/detallesAlquileres.php?op=Delete" method="POST">
                          <input type="hidden" name="salida_detalle_id" value="<?= $out->salida_detalle_id ?>">
                          <input type="submit" name="borrar" class="btn btn-danger" value="Borrar">
                        </form>
                    </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Salida</th>
                    <th>Producto</th>
                    <th>Obra</th>
                    <th>Empleado</th>
                    <th>Cantidad</th>
                    <th>Cantidad Propia</th>
                    <th>Cantidad Subalquilada</th>
                    <th>Valor Unitario</th>
                    <th>Fecha de StandBye</th>
                    <th>Estado del Producto</th>
                    <th>Valor Total</th>
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