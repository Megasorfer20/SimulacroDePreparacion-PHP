<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-green">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ALQUILARTEMIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/contructora.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Version 2.0</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item">
                   <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Empleados" class="nav-link <?php if($routesArray[6]=="Empleados"): ?> active <?php endif ?>">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Empleados
                </p>
            </a>
            </li>

            
            <li class="nav-item">
                <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Clientes" class="nav-link <?php if($routesArray[6]=="Clientes"): ?> active <?php endif ?>">
                    <i class="nav-icon far fa-user-circle"></i>
                    <p>
                        Clientes
                    </p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Productos" class="nav-link <?php if($routesArray[6]=="Productos"): ?> active <?php endif ?>">
                    <i class="nav-icon fa fa-shopping-cart"></i>
                    <p>
                        Productos
                    </p>
                </a>
            </li>
            
            
            <li class="nav-item">
                <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Obras" class="nav-link <?php if($routesArray[6]=="Obras"): ?> active <?php endif ?>">
                <i class="nav-icon fa fa-object-group"></i>
                <p>
                    Obras
                </p>
            </a>
        </li>
            <li class="nav-item">
                <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Inventarios" class="nav-link <?php if($routesArray[6]=="Inventarios"): ?> active <?php endif ?>">
                <i class="nav-icon fa fa-list"></i>
                <p>
                    Inventarios
                </p>
                </a>
            </li>
        
            <li class="nav-item">
                <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Liquidaciones" class="nav-link <?php if($routesArray[6]=="Liquidaciones"): ?> active <?php endif ?> ">
                <i class="nav-icon fa fa-credit-card"></i>
                <p>
                    Liquidaciones
                </p>
                </a>
            </li>

        <li class="nav-item">
            <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Alquileres" class="nav-link <?php if($routesArray[6]=="Alquileres"): ?> active <?php endif ?>">
            <i class="nav-icon fa fa-handshake"></i>
            <p>
                Alquileres
            </p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/DetallesAlquiler" class="nav-link <?php if($routesArray[6]=="DetallesAlquiler"): ?> active <?php endif ?>">
            <i class="nav-icon far fa-list-alt"></i>
            <p>
                Detalles Alquiler
            </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/Devoluciones" class="nav-link <?php if($routesArray[6]=="Devoluciones"): ?> active <?php endif ?>">
            <i class="nav-icon fa fa-hdd"></i>
            <p>
                Devoluciones
            </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/TrabajoEnGrupos/SimulacroDePreparacion/alquilartemis/fullstack/frontend/DetallesDevolucion" class="nav-link <?php if($routesArray[6]=="DetallesDevolucion"): ?> active <?php endif ?>">
            <i class="nav-icon fa fa-archive"></i>
            <p>
                Detalles Devolucion
            </p>
            </a>
        </li>



            

            

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>