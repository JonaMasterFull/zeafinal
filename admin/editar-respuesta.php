<?php 
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';
    include_once '../database/conexion.php';
    if(isset($_GET['id']) && isset($_GET['idres'])){
      $idmensaje =  $_GET['id'];
      $idrespueta =  $_GET['idres'];
      $sql = "SELECT mensaje.id_mensaje,respuesta.id_respuesta,respuesta.Estado,respuesta.Mensaje FROM mensaje Inner Join respuesta 
      on mensaje.id_mensaje = respuesta.id_mensaje Where mensaje.id_mensaje = '$idmensaje' AND respuesta.id_respuesta = '$idrespueta'";
      $query = mysqli_query($conectar,$sql);
      if(mysqli_num_rows($query) == 1){
          $row = mysqli_fetch_array($query);
          $Idmensaje = $row['id_mensaje'];
          $Idrespuestas = $row['id_respuesta'];
          $Respuesta = $row['Mensaje'];
          $Estado = $row['Estado'];
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
            <a href="listado-correos.php" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

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

                    <span class="badge bg-danger float-right"></span>

                  </a>
                </li>
                <li class="nav-item">
                  <a href="listado-correos-enviados.php" class="nav-link">
                    <i class="far fa-envelope"></i> Enviados
                    <?php 
                $sql="SELECT Count(Estado) as TOTAL FROM respuesta Where Estado = 1";
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
           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Editar Respuesta</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="controlador/editar-respuesta.php?idres=<?php echo $_GET['idres']; ?>" method="post">
                <input type="hidden" name="mensaje" value="<?php echo $Idmensaje;?>">
                <div class="form-group">
                  <select class="form-control" name="status">
                  <option value="0">Selecciona el estado de esta respuesta</option>
                  <?php 
                  $sql="SELECT * FROM status";
                  $result = mysqli_query($conectar,$sql);
                  while ($mostrar=mysqli_fetch_array($result)) {
                  ?>
                    <option value="<?php echo $mostrar['id'] ?>" <?php if($mostrar['id'] == $Estado): ?>selected<?php endif;?>><?php echo $mostrar['Nombre'] ?></option>
                    <?php } ?>
                 </select>
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" name="respuesta" style="height: 300px"><?php echo $Respuesta; ?></textarea>
                </div>
                <div class="float-right">
                  <button type="submit" class="btn btn-primary" name="update"><i class="far fa-envelope"></i> Enviar</button>
                </div>
                <a type="reset" class="btn btn-default" href="listado-correos.php"><i class="fas fa-times mr-2"></i> Descartar</a>
              </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
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

