<?php 
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';
    include_once '../database/conexion.php';
    

    
    if(isset($_GET['id'])){
      $id =  $_GET['id'];
      $sql = "SELECT * FROM mensaje WHERE id_mensaje = '$id'";
      $query = mysqli_query($conectar,$sql);
      if(mysqli_num_rows($query) == 1){
          $row = mysqli_fetch_array($query);
          $Email = $row['Email'];
          $Mensaje = $row['Mensaje'];
          $Pregunta = $row['id_pregunta'];
      }
  }
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
                    <?php 
                $sql="SELECT Count(Estado) as TOTAL FROM respuesta Where Estado = 'No contestado';";
                $result = mysqli_query($conectar,$sql);
                while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                    <span class="badge bg-danger float-right"><?php echo $mostrar['TOTAL']; ?></span>
                <?php }?>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="listado-correos-enviados.php" class="nav-link">
                    <i class="far fa-envelope"></i> Enviados
                    <?php 
                $sql="SELECT Count(Estado) as TOTAL FROM respuesta Where Estado = 'Contestado';";
                $result = mysqli_query($conectar,$sql);
                while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                    <span class="badge bg-primary float-right"><?php echo $mostrar['TOTAL']; ?></span>
                <?php }?>
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
                <h6>Enviado por: <?php echo $Email; ?>

              </div>
         
              <div class="mailbox-read-message">
                <p><?php echo $Mensaje; ?></p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
        
            <!-- /.card-footer -->
            <div class="card-footer">
          
              <a type="button" class="btn btn-danger mr-2" href="controlador/eliminar-correo.php?id=<?php echo $_GET['id']; ?>"><i class="far fa-trash-alt mr-2"></i> Delete</a>
              <a type="button" class="btn btn-primary mr-2" href="responder-mensaje.php?id=<?php echo $_GET['id']; ?>"><i class="fas fa-paper-plane mr-2"></i> Responder</a>
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

