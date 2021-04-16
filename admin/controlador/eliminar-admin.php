<?php 
    

        $id = $_GET['id'];
        require_once '../../database/conexion.php';
            $sql = "DELETE FROM `users` WHERE id_users = $id;";
            $ejecutar = mysqli_query($conectar,$sql);
            
            if($ejecutar){
                
                header("Location: ../listado-admin.php");
            }else{
                header("Location: ../listado-admin.php");
            }
     
?>
