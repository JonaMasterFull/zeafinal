<?php 
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';
    include_once '../database/conexion.php';
    
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Main content -->
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ver Mensaje</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="listado-correos.php" class="btn btn-primary btn-block mb-3">Regresar</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Inicio</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="listado-correos.php" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-danger float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="listado-correos-enviados.php" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
              </ul>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Leer Email</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h6>Enviado por: support@adminlte.io

              </div>
         
              <div class="mailbox-read-message">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate corporis quae iure deleniti assumenda. Itaque porro deleniti aperiam ducimus iusto consectetur dignissimos, mollitia praesentium, atque, officia voluptatibus exercitationem necessitatibus.</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
        
            <!-- /.card-footer -->
            <div class="card-footer">
          
              <button type="button" class="btn btn-danger mr-2"><i class="far fa-trash-alt mr-2"></i> Delete</button>
              <button type="button" class="btn btn-primary mr-2"><i class="fas fa-print mr-2"></i> Responder</button>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
     include_once 'templates/footer.php';
  ?>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php 
 
  include_once 'templates/scripts.php'

?> 

