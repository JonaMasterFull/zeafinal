<?php 

if(isset($_POST['update'])){

    $id = $_GET['id'];
    $NombreProyecto = $_POST['nombre'];

    require_once '../../database/conexion.php';
        $sql = "UPDATE `proyectos` SET Nombre = '$NombreProyecto' WHERE id_proyecto = $id;";
        $ejecutar = mysqli_query($conectar,$sql);
        
        if($ejecutar){
            
            header("Location: ../listado-proyectos.php");
        }else{
            header("Location: ../listado-proyectos.php");
        }
}

?>