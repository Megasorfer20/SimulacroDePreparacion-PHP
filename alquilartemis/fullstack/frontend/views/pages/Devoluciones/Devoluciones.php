<?php
require_once('../../fullstack/backend/config/Conectar.php');
require_once('../../fullstack/backend/models/devolucion.php');

?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Devoluciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Devoluciones</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php include "actions/new.php"; ?>
      <div class="container-fluid">
      <?php include "actions/list.php"; ?>
      </div>
    </section>