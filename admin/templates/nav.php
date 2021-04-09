<?php  
    
?>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Sitio TM</a>
      </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    <li class="nav-item">
        <a class="btn btn-danger" role="button" data-toggle="modal" data-target="#cerrar">
          <i class="fas fa-times-circle"></i>
        </a>
      </li>
 
      <!-- /.navbar -->
  
    </ul>

  </nav>
  <div class="modal fade" id="cerrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-gray-dark">
      <div class="modal-header bg-gradient-dark">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Session</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h2>¿Seguro quieres Cerrar Session?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-danger" href="./controlador/logout.php">Cerrar Session</a>        
      </div>
    </div>
  </div>
</div>