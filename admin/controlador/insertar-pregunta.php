<?php 
$mensaje = '';
if(isset($_POST['btn-enviar'])){


        $Pregunta = $_POST['nombre'];
        $Proyecto = $_POST['proyecto'];

        try{
            require_once '../../database/conexion.php';
        
            $sql = "INSERT INTO preguntas VALUES (Null,'$Pregunta','$Proyecto')";

            $ejecutar = mysqli_query($conectar,$sql);

            if(!$ejecutar){
                header("Location: ../crear-preguntas.php");

            }else{
                header("Location: ../crear-preguntas.php");

            }
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>