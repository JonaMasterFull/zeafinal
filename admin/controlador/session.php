<?php 
    include_once 'validar.php';
    require_once '../database/conexion.php';


// SQL Query para completar la informacion del usuario

            session_start();
            $user_check = $_SESSION['usuario'];

            $sql2 = "SELECT * FROM users WHERE Usuario = '$user_check'";
            $query2 = mysqli_query($conectar,$sql2);
            $valor = mysqli_fetch_assoc($query2);
            
            $login_session = $valor['NombreCompleto'];
            
if(!isset($login_session)){
mysqli_close($conectar); // Cerrando la conexion
header('Location: admin-area.php'); // Redirecciona a la pagina de inicio
}
?>

