<?php 

if(isset($_POST['update'])){

    $id = $_GET['id'];
    $Nombre = $_POST['nombre'];
    $Proyecto = $_POST['proyecto'];

    require_once '../../database/conexion.php';
        $sql = "UPDATE `preguntas` SET Nombre = '$Nombre',id_proyecto = '$Proyecto' WHERE id_pregunta = $id;";
        $ejecutar = mysqli_query($conectar,$sql);
        
        if($ejecutar){
            
            header("Location: ../listado-preguntas.php");
        }else{
            header("Location: ../listado-preguntas.php");
        }
}

?>