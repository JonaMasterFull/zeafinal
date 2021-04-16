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

    <section class="container-fluid">
        
        <section class="mt-5 mb-5">
            <h1>SU MENSAJE SE ENVIÓ EXITOSAMENTE</h1>
            <a href="index.">Regresar a Inicio</a>
        </section>

    </section>

    <?php 
    include_once 'templates/footer.php';
?>
