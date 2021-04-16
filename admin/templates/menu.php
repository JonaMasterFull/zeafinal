  <?php include_once './controlador/session.php'; 
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin-area.php" class="brand-link">
      
      <span class="brand-text font-weight-light"><b>TM</b> Administrador</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Bienvenido:</a>
          <a> <?php 
            echo $login_session;
          ?> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!--Dashboard-->
            <li class="nav-item">
              <a href="admin-area.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

          <!--Noticia-->
          <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-mail-bulk"></i>
                <p>
                  TM
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                          <p>Proyectos</p>
                          <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="listado-proyectos.php" class="nav-link">
                              <i class="far fas fa-eye nav-icon"></i>

                              <p>Ver Proyectos</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="crear-proyectos.php" class="nav-link">
                              <i class="far fas fa-plus-circle nav-icon"></i>
                              <p>Agregar Proyecto</p>
                            </a>
                          </li>
                         
                        </ul>
                </li><!--End Culinarias-->
                <li class="nav-item"><!--Mexicana-->
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-question-circle"></i>

                        <p>Preguntas</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="listado-preguntas.php" class="nav-link">
                          <i class="far fas fa-eye nav-icon"></i>

                          <p>Ver Preguntas</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="crear-preguntas.php" class="nav-link">
                          <i class="far fas fa-plus-circle nav-icon"></i>
                          <p>Agregar Preguntas</p>
                        </a>
                      </li>
                    </ul>
                 </li>
            </ul>
          </li>
          <!--End TM-->

           <!--Respuesatas-->
           <li class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Correo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="listado-correos.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver Correos</p>
                </a>
              </li>
            </ul>
          </li>
          <!--End Correos-->
          <!--Administracion-->
          <li class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Administracion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="listado-admin.php" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear-admin.php" class="nav-link">
                  <i class="far fas fa-plus-circle nav-icon"></i>
                  <p>Agregar Usuarios</p>
                </a>
              </li>

            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
