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
            <h1>Correos Enviados</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
         
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
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="listado-correos-enviados.php" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                  <td><span class="badge bg-danger">No contestado</span></td>
                  <td><span class="badge bg-success">Contestado</span></td>


                    <td class="mailbox-name"><a href="read-mail.html">Correo De</a></td>
                    <td class="mailbox-subject"><b>Asunto</b> Mensaje
                    <td class="mailbox-subject"><b></b>
                    </td>
                    <td>
                    <a href="editar-admin.php?id=<?php echo $mostrar['id_users']; ?>" class="btn btn-warning mr-2"><i class="fas fa-pen"></i></a>
                    <a href="controlador/eliminar-admin.php?id=<?php echo $mostrar['id_users']; ?>" class="btn btn-danger mr-2"><i class="fas fa-eraser"></i></a>
                    <a href="controlador/eliminar-admin.php?id=<?php echo $mostrar['id_users']; ?>" class="btn btn-primary"><i class="fas fa-paper-plane mr-2"></i>Responder</a>
                    </td>
                  </tr>
                  
                  
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
        
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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

