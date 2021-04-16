<?php 
    include_once 'templates/header.php';
    require_once 'database/conexion.php';
?>

<section class="promo-section section section-on-bg">
        <div class="hero-slider-wrapper">
            <div id="hero-carousel" class="hero-carousel carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
             <div class="carousel-inner">
                <div class="carousel-item active slide slide-1"></div>
                <div class="carousel-item slide slide-2"></div>
                <div class="carousel-item slide slide-3"></div>
            </div>
        </div><!--//hero-carousel-->
        <div class="hero-slider-mask"></div>
    </div><!--//hero-slider-wrapper--> 
    <div class="container promo-content">                
        <h2 class="headline">Bienvenido a TM<br>todas nuestras apps a tu alcance</h2>
        <p class="tagline">Todas tus dudas a nuestro alcance.</p>
        <div class="actions">
            <a class="btn btn-cta btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">TM</a>  
            <br class="d-sm-inline-block d-md-none">
            <a href="section-wrapper" class="video-play-trigger" data-bs-toggle="modal" data-bs-target="#modal-video" >
            <img class="play-icon" src="assets/images/play-icon.svg" alt="">Ver mas</a>
        </div>
    </div><!--//container-->
</section><!--//promo-section-->


<div class="sections-wrapper">    

    <section class="overview-section section">
        <h2 class="section-title">
                Selecciona alguno de nuestros siguientes proyectos:
        </h2>
        <div class="categorias container-fluid" id="categorias">
                        <a href="Novam.php" class="btn btn-light">    
                        <div class="categoria">
                        
                            <img src="assets/images/logos/Novam.png" height="100px" >
                            <p>Novam</p>
                        </div>
                        </a>
                        <a href="Dirapp.php" class="btn btn-light">
                        <div class="categoria" data-categoria="entregas">
                            <img src="assets/images/logos/Dirapp.png" height="100px" >
                            <p>DirApp</p>
                        </div>
                        </a>
                        <a href="Dirzoo.php" class="btn btn-light">
                        <div class="categoria" data-categoria="seguridad">
                            <img src="assets/images/logos/DirZoo.png" height="100px" >
                            <p>DirZoo</p>
                        </div>
                        </a>
                        <a href="Zea.php" class="btn btn-light">
                        <div class="categoria" data-categoria="cuenta">
                            <img src="assets/images/logos/Zea.png" height="100px" >
                            <p>Zea</p>
                        </div>
                        </a>
                        <a href="Leva.php" class="btn btn-light">
                        <div class="categoria" data-categoria="cuenta">
                            <img src="assets/images/logos/Leva.png" height="100px" >
                            <p>Levá</p>
                        </div>
                        </a>
            </div>
        <div class="section-intro">
            <br>
            <h1>Preguntas Frecuentes de Novam</h1>
            <br>
            <div class="card">
            <?php  
        
                $sql = "SELECT id_pregunta,preguntas.Nombre,proyectos.Nombre as Proyecto FROM preguntas INNER JOIN proyectos on preguntas.id_proyecto = proyectos.id_proyecto WHERE proyectos.Nombre = 'NOVAM'";
                $result = mysqli_query($conectar,$sql);
                while ($mostrar=mysqli_fetch_array($result)) { ?>            
            <div class="card-header">
                <label class="text-bold">Pregunta <?php echo $mostrar['id_pregunta'] ?>:<br><?php echo $mostrar['Nombre'] ?></label>
            </div>
            <br>
        <div class="card-body">
                <label>
                        * Mandanos tus dudas o sugerencias
                </label>
                <br>
                <form class="form-group" action="controlador/enviar-mensaje.php" method="post">
                    <input type="hidden" name="idmensaje" value="<?php echo $mostrar['id_pregunta'] ?>">
                    <label for="exampleFormControlInput1" class="form-label">Ingresa tu correo Electronico</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    <br>
                    <label class="form-label">Escribe tus dudas o sugeriencias</label>
                    <textarea class="form-control" rows="5" name="mensaje"></textarea>
                    <br>
                    <button class="btn btn-primary col-12" name="btn-enviar">Enviar</button>
                </form>
            <?php } ?>
</div>
        </div><!--//section-intro-->
    </section>

<!--
    <section class="apps-section section text-center">
        <h2 class="section-title">Download Our Apps</h2>
        <div class="container">
            <ul class="apps-list list-inline">
                <li class="list-inline-item"><a class="btn btn-download-app btn-apple-download" href="#"><i class="fab fa-apple" ></i> <span class="btn-text"><span class="intro-text">Download on the</span><span class="main-text">App Store</span></span></a></li>
                <li class="list-inline-item"><a class="btn btn-download-app btn-andriod-download" href="#"><i class="fab fa-android" ></i> <span class="btn-text"><span class="intro-text">Get it on</span><span class="main-text">Google Play</span></span></a></li>
                <li class="list-inline-item"><a class="btn btn-download-app btn-windows-download" href="#"><i class="fab fa-windows" ></i> <span class="btn-text"><span class="intro-text">Download from</span><span class="main-text">Windows Phone Store</span></span></a></li>
            </ul>
        </div>
    </section>apps-section-->

</div><!--//section-wrapper-->


<?php 
    include_once 'templates/footer.php';
?>