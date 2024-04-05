<?php

$url = "http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/detallesDevoluciones.php?op=GetAll";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));
#print_r($output);
?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Detalles de la Devolucion</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Devolucion</th>
                    <th>Producto</th>
                    <th>Obra</th>
                    <th>Cantidad</th>
                    <th>Cantidad Propia</th>
                    <th>Cantidad Subalquilada</th>
                    <th>Estado del Producto</th>
                    <th>Borrar</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($output as $out){
                  ?>

                  <tr>
                    <td><?= $out->entrada_id; ?></td>
                    <td><?= $out->nombre_producto; ?></td>
                    <td><?= $out->nombre_obra; ?></td>
                    <td><?= $out->cantidad_entrada; ?></td>
                    <td><?= $out->cantidad_propia_entrada; ?></td>
                    <td><?= $out->cantidad_subalquilada_entrada; ?></td>
                    <td><?= $out->estado; ?></td>
                    <td> <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/detallesDevoluciones.php?op=Delete" method="POST">
                          <input type="hidden" name="entrada_detalle_id" value="<?= $out->entrada_detalle_id ?>">
                          <input type="submit" name="borrar" class="btn btn-danger" value="Borrar">
                        </form>
                    </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Devolucion</th>
                    <th>Producto</th>
                    <th>Obra</th>
                    <th>Cantidad</th>
                    <th>Cantidad Propia</th>
                    <th>Cantidad Subalquilada</th>
                    <th>Estado del Producto</th>
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