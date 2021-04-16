<?php 
        $id = $_GET['id'];
        require_once '../../database/conexion.php';
            $sql = "DELETE FROM `preguntas` WHERE id_pregunta = $id;";
            $ejecutar = mysqli_query($conectar,$sql);
            
            if($ejecutar){
                header("Location: ../listado-preguntas.php");
            }else{
                header("Location: ../listado-preguntas.php");
            }
     
?>
