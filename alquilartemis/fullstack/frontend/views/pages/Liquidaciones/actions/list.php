<?php

$url = "http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/liquidaciones.php?op=GetAll";
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
                    <th>Cliente</th>
                    <th>Producto Liquidado</th>
                    <th>Fecha</th>
                    <th>Precio Total</th>
                    <th>Método de Pago</th>
                    <th>Borrar</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    foreach ($output as $out){
                  ?>

                  <tr>
                    <td><?= $out->nombre_cliente; ?></td>
                    <td><?= $out->producto_liquidado; ?></td>
                    <td><?= $out->fecha_liquidacion; ?></td>
                    <td>$ <?= $out->precio_total; ?></td>
                    <td><?= $out->metodo_pago; ?></td>
                    <td> <form action="http://localhost/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/backend/controls/liquidaciones.php?op=Delete" method="POST">
                          <input type="hidden" name="liquidacion_id" value="<?= $out->liquidacion_id ?>">
                          <input type="submit" name="borrar" class="btn btn-danger" value="Borrar">
                          </form>
                    </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Cliente</th>
                    <th>Producto Liquidado</th>
                    <th>Fecha</th>
                    <th>Precio Total</th>
                    <th>Método de Pago</th>
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