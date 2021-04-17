<?php 
    

        $id = $_GET['id'];
        require_once '../../database/conexion.php';
            $sql = "DELETE FROM respuesta WHERE id_mensaje = $id;";
            $ejecutar = mysqli_query($conectar,$sql);
            
            if($ejecutar){
                
                header("Location: ../listado-correos.php");
            }else{
                header("Location: ../listado-correos.php");
            }
     
?>
