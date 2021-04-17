<?php 

if(isset($_POST['btn-enviar'])){


        $Respuesta = $_POST['respuesta'];
        $Estado = $_POST['status'];
        $Mensajes = $_POST['enviar'];


        try{
            require_once '../../database/conexion.php';
        
            $sql = "INSERT INTO respuesta VALUES (Null,'$Mensajes','$Respuesta','$Estado')";

            $ejecutar = mysqli_query($conectar,$sql);

            if(!$ejecutar){
                header("Location: ../listado-correos.php");

            }else{
                header("Location: ../listado-correos.php");

            }
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>