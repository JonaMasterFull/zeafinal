<?php
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';

    if(isset($_GET['id'])){
        $id =  $_GET['id'];
        $sql = "SELECT * FROM proyectos WHERE id_proyecto = '$id'";
        $query = mysqli_query($conectar,$sql);
        if(mysqli_num_rows($query) == 1){
            $row = mysqli_fetch_array($query);
            $NombreProyecto = $row['Nombre'];
        }
    }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Proyecto
                <small>* Llena el formulario</small>
            </h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Horizontal Form -->
      <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Editar Proyecto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form class="form-horizontal" method="post" action="controlador/editar-proyecto.php?id=<?php echo $_GET['id']; ?>">
                  <div class="card-body">
                    <!-- form start -->
                    <div class="form-group row" hidden>
                      <label for="id" class="col-sm-2 col-form-label">id: </label>
                      <div class="col-sm-10">
                        <input  type="text" class="form-control" id="id" placeholder="Agrega el id">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nombre" class="col-sm-2 col-form-label">Nombre del Proyecto: </label>
                      <div class="col-sm-10">
                        <input  type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $NombreProyecto; ?>" placeholder="Agrega Nombre">
                      </div>
                    </div>
                    
                  </div>

                  <!-- /.card-body -->
                  <div class="card-footer">
                  <div class="row">
                    <button type="submit" class="btn btn-info col-sm-6 p-2" name="update"><i class="fas fa-plus mr-2"></i> Agregar</button>
                    <a type="submit" class="btn btn-danger col-sm-6 p-2" name="cancelar" href="listado-proyectos.php"><i class="fas fa-reply mr-2"></i> Cancelar</a>
                    </div>
                  </div>
                </form>
              </div>
              </form>
            </div>
            <!-- /.card -->
            
    </section>
    <!-- /.content -->

  
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
