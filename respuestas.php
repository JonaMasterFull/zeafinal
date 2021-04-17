<?php 
    include_once 'templates/header.php';
    require_once 'database/conexion.php';
?>

<div class="stories container" >

    <div id="story-block-1" class="story-block story-block-1">

                
                    <div class="row">
                            <form action="respuestas.php" method="post">
                            <div class="col-12 col-md-12">                    
                                <input type="text" class="form-control"  placeholder="Buscar" name="buscar" id="buscar"/>
                            </div>            
                            <br>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-light form-control"> Buscar</button>
                            </div>
                            </form>                             
                    </div>
               
        <h2 class="section-title">
                Estas son las respuestas a nuestros usuarios
        </h2>
        
        <div class="quotes">
            <div class="row">
            <?php 
            if(!isset($_POST['buscar'])){
                $_POST['buscar'] = "";
                $Buscar = $_POST['buscar'];

              }
              $Buscar = $_POST['buscar'];
               
              $sql = "SELECT mensaje.id_mensaje,respuesta.id_respuesta,mensaje.Mensaje as recibido,respuesta.Mensaje,preguntas.Nombre as preguntas, proyectos.Nombre as proyectos FROM mensaje LEFT jOIN respuesta on mensaje.id_mensaje = respuesta.id_mensaje Inner Join preguntas on mensaje.id_pregunta = preguntas.id_pregunta Inner Join proyectos on preguntas.id_proyecto = proyectos.id_proyecto
              where preguntas.Nombre LIKE '%".$Buscar."%' And respuesta.Estado = 1;";

                    $result = mysqli_query($conectar,$sql);
                            while ($mostrar=mysqli_fetch_array($result)) {
                            ?>
                <div class="quote-item col-12 col-md-6 text-center">
                
                    <div class="inner">
                        <div class="profile">
                            <img src="assets/images/stories/profiles/profile-1.png" alt="">
                        </div><!--//profile-->
                       
                        <i class="fas fa-quote-left" aria-hidden="true"></i>
                        <blockquote class="quote">
                            Duda: <p><?php echo $mostrar['recibido']; ?></p>
                        </blockquote><!--//blockquote-->
                        <br>
                        <blockquote class="quote">
                            Respuesta: <?php echo $mostrar['Mensaje']; ?>
                        </blockquote><!--//blockquote-->
                        <div class="source">
                            <div class="name"><?php echo $mostrar['preguntas'];?></div>
                            <div class="title"><?php echo $mostrar['proyectos'] ?></div>
                        </div><!--//source-->
                       
                    </div><!--//inner-->
                   
                </div><!--//quote-item-->
                <?php }?>
            
            </div><!--//row-->
        </div><!--//quotes-->   
    </div><!--//story-block-->

</div>


<?php 
    include_once 'templates/footer.php';
?>