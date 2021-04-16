<?php 
$mensaje = '';
if(isset($_POST['btn-enviar'])){


        $Proyecto = $_POST['nombre'];

        try{
            require_once '../../database/conexion.php';
        
            $sql = "INSERT INTO proyectos VALUES (Null,'$Proyecto')";

            $ejecutar = mysqli_query($conectar,$sql);

            if(!$ejecutar){
                header("Location: ../crear-proyectos.php");

            }else{
                header("Location: ../crear-proyectos.php");

            }
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>