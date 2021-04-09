<?php 
 include_once 'templates/header.php';
 include_once 'controlador/validar.php';
 if(isset($_SESSION['usuario'])){
    header("location: admin-area.php");
 }
?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>ZEA</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Agrega tus datos para Iniciar Session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Iniciar Session</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <div class="clear"> </div>
				<span><?php echo $error; ?></span>
			</div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php 

include_once 'templates/scripts.php'
?>
