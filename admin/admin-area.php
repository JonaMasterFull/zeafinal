<?php 
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';
    include_once '../database/conexion.php';
    
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Main content -->




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid mt-3">
        <!-- Small boxes (Stat box) -->
        <h1 class="text-center">Dashboard</h1>
        <h3 class="mb-2">TM <small><i>Registros totales</i></small></h3>
        <div class="row">
          <div class="col-lg-3 col-6">
            
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $sql = "SELECT COUNT(id_proyecto) as culi FROM proyectos";
                $result = mysqli_query($conectar,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                  $id = $mostrar['culi'];
                  if($id == 1){
                    $html =  'Proyecto';
                  }else{
                    $html = 'Proyectos';
                  }
              ?>
                <h3><?php echo $mostrar['culi']; ?><sup style="font-size: 20px" class="ml-2"><?php echo $html ?></sup></h3>
              <?php } ?>
                <p>Proyectos</p>
              </div>
              <div class="icon">
                <i class="fab fa-blogger-b"></i>
              </div>
              <a href="listado-proyectos.php" class="small-box-footer">Ver mas<i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $sql = "SELECT COUNT(id_pregunta) as inter FROM preguntas";
                $result = mysqli_query($conectar,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                  $id = $mostrar['inter'];
                  if($id == 1){
                    $html =  'Pregunta';
                  }else{
                    $html = 'Preguntas';
                  }
              ?>
                <h3> <?php echo $mostrar['inter']; ?><sup style='font-size: 20px' class="ml-2"><?php echo $html ?></sup></h3>
              <?php  } ?>
                <p>Preguntas</p>
              </div>
              <div class="icon">
                <i class="fas fa-globe"></i>
              </div>
              <a href="listado-preguntas.php" class="small-box-footer">Ver mas <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $sql = "SELECT COUNT(id_respuesta) as mexi FROM respuesta";
                $result = mysqli_query($conectar,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                  $id = $mostrar['mexi'];
                  if($id == 1){
                    $html =  'Respuesta';
                  }else{
                    $html = 'Respuestas';
                  }
              ?>
                <h3><?php echo $mostrar['mexi']; ?><sup style="font-size: 20px" class="ml-2"><?php echo $html ?></sup></h3>
                <?php  } ?>
                <p>Respuestas</p>
              </div>
              <div class="icon">
                <i class="far fa-envelope"></i>
              </div>
              <a href="listado-correos-enviados.php" class="small-box-footer">Ver mas <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $sql = "SELECT COUNT(id_mensaje) as expe FROM mensaje";
                $result = mysqli_query($conectar,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                  $id = $mostrar['expe'];
                  if($id == 1){
                    $html =  'Mensaje';
                  }else{
                    $html = 'Mensajes';
                  }
              ?>
                <h3><?php echo $mostrar['expe']; ?><sup style="font-size: 20px" class="ml-2"><?php echo $html ?></sup></h3>
                <?php  } ?>
                <p>Mensajes</p>
              </div>
              <div class="icon">
                <i class="fas fa-mail-bulk"></i>
              </div>
              <a href="listado-correos.php" class="small-box-footer">Ver mas <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>  
  </section>
  <!-- Main content -->

  <section class="content">
      <div class="container-fluid mt-3">
        <!-- Small boxes (Stat box) -->
        <h3 class="mb-2">TM <small><i>Administradores totales</i></small></h3>
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $sql = "SELECT COUNT(id_users) as mexi FROM users";
                $result = mysqli_query($conectar,$sql);
                while($mostrar = mysqli_fetch_array($result)){
                  $id = $mostrar['mexi'];
                  if($id == 1){
                    $html =  'Administrador';
                  }else{
                    $html = 'Administradores';
                  }
              ?>
                <h3><?php echo $mostrar['mexi']; ?><sup style="font-size: 20px" class="ml-2"><?php echo $html ?></sup></h3>
                <?php  } ?>
                <p>Administracion</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-friends"></i>
              </div>
              <a href="listado-admin.php" class="small-box-footer">Ver mas <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
         
        </div>
        <!-- /.row -->
      </div>  
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

