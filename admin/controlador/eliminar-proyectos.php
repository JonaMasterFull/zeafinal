<?php 
    

        $id = $_GET['id'];
        require_once '../../database/conexion.php';
            $sql = "DELETE FROM `proyectos` WHERE id_proyecto = $id;";
            $ejecutar = mysqli_query($conectar,$sql);
            
            if($ejecutar){
                header("Location: ../listado-proyectos.php");
            }else{
                header("Location: ../listado-proyectos.php");
            }
     
?>
