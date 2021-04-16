<?php
    include_once 'templates/header.php';
    include_once 'templates/nav.php';
    include_once 'templates/menu.php';
    include_once '../database/conexion.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Listado Proyecto</h1>
            </div>

            </div>
        </div><!-- /.container-fluid -->
        </section>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12">
        <div class="table-responsive table-responsive-lg">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title col-12 mb-3">Listado de Proyectos</h3>
            <br>
            <a href="crear-proyectos.php" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Agregar Proyectos</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <table id="example2" class="table table-primary table-bordered table-hover table-responsive-sm">
            <?php
            $sql="SELECT * FROM proyectos";
            $result = mysqli_query($conectar,$sql);
           ?>
              <thead class="thead-dark">
              <tr>
                <th>id</th>
                <th>Proyecto</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <?php
              while ($mostrar=mysqli_fetch_array($result)) {
              ?>
              <tbody class="table-light">
              <tr>
                <td><?php echo $mostrar['id_proyecto'] ?></td>
                <td><?php echo $mostrar['Nombre'] ?></td>
                <td>
                <a href="editar-proyectos.php?id=<?php echo $mostrar['id_proyecto']; ?>" class="btn btn-warning mr-2"><i class="fas fa-edit mr-2"></i>Editar</a>
                <a href="controlador/eliminar-proyectos.php?id=<?php echo $mostrar['id_proyecto']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt mr-2"></i>Eliminar</a>
                </td>
              </tr>
              </tbody>
              <?php
           }?>
            </table>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
        </div>
      </div>
    </div>
</section>


  </div>
  <!-- /.content-wrapper -->

  <?php
     include_once 'templates/footer.php';
  ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">

  </aside>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php

  include_once 'templates/scripts.php'

  ?>
