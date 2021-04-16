<?php 
$mensaje = '';
if(isset($_POST['enviar'])){


        $Usuario = $_POST['usuario'];
        $NombreCompleto = $_POST['nombre'];
        $Password = $_POST['password'];

       

        try{
            require_once '../../database/conexion.php';
        
            $sql = "INSERT INTO users VALUES (Null,'$NombreCompleto', '$Usuario', '$Password')";

            $ejecutar = mysqli_query($conectar,$sql);

            if(!$ejecutar){
                header("Location: ../crear-admin.php");

            }else{
                header("Location: ../crear-admin.php");

            }
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>