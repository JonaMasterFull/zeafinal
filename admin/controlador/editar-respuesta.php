<?php 

if(isset($_POST['update'])){

    $id = $_GET['idres'];
    $Mensaje = $_POST['mensaje'];
    $Respuesta = $_POST['respuesta'];
    $Estado = $_POST['status'];

    require_once '../../database/conexion.php';
        $sql = "UPDATE `respuesta` SET id_mensaje = '$Mensaje', Mensaje = '$Respuesta',Estado = '$Estado' WHERE id_respuesta = $id;";
        $ejecutar = mysqli_query($conectar,$sql);
        
        if($ejecutar){
            
            header("Location: ../listado-correos.php");
        }else{
            header("Location: ../listado-correos.php");
        }
}

?>