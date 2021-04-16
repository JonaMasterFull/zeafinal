<?php
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';
    include_once '../database/conexion.php';

        
    if(isset($_GET['id'])){
        $id =  $_GET['id'];
        $sql = "SELECT * FROM users WHERE id_users = '$id'";
        $query = mysqli_query($conectar,$sql);
        if(mysqli_num_rows($query) == 1){
            $row = mysqli_fetch_array($query);
            $NombreCompleto = $row['NombreCompleto'];
            $Usuario = $row['Usuario'];
            $Password = $row['Pass'];
        }
    }
    

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Administrador
                <small>*Llena el formulario</small>
            </h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content col-sm-12">
           
      <!-- Horizontal Form -->
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Editar Administrador</h3>
              </div>
              <!-- /.card-header -->
             
              <!-- form start -->
            
              <form class="form-horizontal" action="controlador/editar-admin.php?id=<?php echo $_GET['id']; ?>" method="post">
                <div class="card-body">
                  <!-- form start -->
                  <div class="form-group row" hidden>
                    <label for="id" class="col-sm-2 col-form-label">id: </label>
                    <div class="col-sm-10">
                      <input  type="text" class="form-control" id="id" name="id" value="" placeholder="Agrega el usuario">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="usuario" class="col-sm-2 col-form-label">Usuario: </label>
                    <div class="col-sm-10">
                      <input  type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $Usuario; ?>" placeholder="Agrega el usuario">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre Completo: </label>
                    <div class="col-sm-10">
                      <input  type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $NombreCompleto; ?>" placeholder="Agrega el Nombre completo">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Contraseña: </label>
                    <div class="col-sm-10">
                      <input  type="password" class="form-control" id="password" name="password" value="<?php echo $Password; ?>"  placeholder="Agregar la contraseña">
                    </div>
                  </div>

                </div>
               
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="row">
                  <button type="submit" class="btn btn-info col-sm-6 p-2" name="update"><i class="fas fa-plus mr-2"></i> Agregar</button>
                  <a type="submit" class="btn btn-danger col-sm-6 p-2" name="cancelar" href="listado-admin.php"><i class="fas fa-reply mr-2"></i> Cancelar</a>
                  </div>
                </div>
                
              </form>
              
            
             
            </div>
            <!-- /.card -->

            
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
