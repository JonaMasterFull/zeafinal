<?php
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Proyecto
                <small>*Llena el formulario</small>
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
                <h3 class="card-title">Agregar Proyecto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="controlador/insertar-proyectos.php">
                <div class="card-body">
                  <!-- form start -->
                  <div class="form-group row" hidden>
                    <label for="id" class="col-sm-2 col-form-label">id: </label>
                    <div class="col-sm-10">
                      <input  type="text" class="form-control" id="id" name="id"  placeholder="Agrega el id">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Proyecto: </label>
                    <div class="col-sm-10">
                      <input  type="text" class="form-control" id="nombre" name="nombre"  placeholder="Agrega Nombre">
                    </div>
                  </div>
                  
                </div>

                <!-- /.card-body -->
                <div class="card-footer"> 
                  <button type="submit" class="btn btn-danger col-sm-12 p-2" name="btn-enviar" id="btn-enviar"><i class="fas fa-plus mr-2"></i>Agregar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            
    </section>
    <!-- /.content -->

    <div class="container col-11">
            <div class="row">
                <div class="col-sm-12 ">
                    <label class="text-capitalize">Da Click</label>
                    <a href="listado-proyectos.php" class="btn btn-warning ml-3"><i class="fas fa-server mr-2"></i> Ver listado</a>
                </div>
            </div>
        </div>
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
