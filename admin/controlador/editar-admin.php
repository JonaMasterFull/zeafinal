<?php 

if(isset($_POST['update'])){

    $id = $_GET['id'];
    $Usuario = $_POST['usuario'];
    $Nombre = $_POST['nombre'];
    $Password = $_POST['password'];

    require_once '../../database/conexion.php';
        $sql = "UPDATE `users` SET NombreCompleto = '$Nombre',Usuario = '$Usuario',Pass = '$Password' WHERE id_users = $id;";
        $ejecutar = mysqli_query($conectar,$sql);
        
        if($ejecutar){
            
            header("Location: ../listado-admin.php");
        }else{
            header("Location: ../listado-admin.php");
        }
}

?>