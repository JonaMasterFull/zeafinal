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
              <i class="nav-icon fas fa-newspaper"></i>
                <p>
                  Blogs
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-mortar-pestle"></i>
                          <p>Culinarias</p>
                          <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="listado-culinarias.php" class="nav-link">
                              <i class="far fas fa-eye nav-icon"></i>

                              <p>Ver Listado</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="crear-culinarias.php" class="nav-link">
                              <i class="far fas fa-plus-circle nav-icon"></i>
                              <p>Agregar Blogs</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="listado-culinarias-blog.php" class="nav-link">
                              <i class="far fas fa-eye nav-icon"></i>

                              <p>Listado Tags</p>
                            </a>
                          </li>
                        </ul>
                </li><!--End Culinarias-->
                <li class="nav-item"><!--Mexicana-->
                      <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-globe-americas"></i>

                        <p>Internacional</p>
                        <i class="right fas fa-angle-left"></i>
                      </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="listado-internacional.php" class="nav-link">
                          <i class="far fas fa-eye nav-icon"></i>

                          <p>Ver Noticias</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="crear-internacional.php" class="nav-link">
                          <i class="far fas fa-plus-circle nav-icon"></i>
                          <p>Agregar Blogs</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="listado-internacional-blog.php" class="nav-link">
                          <i class="far fas fa-eye nav-icon"></i>

                          <p>Listado Tags</p>
                        </a>
                      </li>
                    </ul>
                 </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-pepper-hot"></i>

                      <p>Mexicana</p>
                      <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="listado-mexicana.php" class="nav-link">
                          <i class="far fas fa-eye nav-icon"></i>

                          <p>Ver Noticias</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="crear-mexicana.php" class="nav-link">
                          <i class="far fas fa-plus-circle nav-icon"></i>
                          <p>Agregar Blogs</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="listado-mexicana-blog.php" class="nav-link">
                          <i class="far fas fa-eye nav-icon"></i>

                          <p>Listado Tags</p>
                        </a>
                      </li>
                    </ul>
                 </li>
            </ul>
          </li>
          
          <!--Administracion-->
          <li class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-table"></i>
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
