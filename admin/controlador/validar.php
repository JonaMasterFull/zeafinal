<?php 
   
    $error = '';
    if(isset($_POST['submit'])){
        if(empty($_POST['usuario']) || empty($_POST['password'])){
            $error = "No tiene datos";
        }else{
            // Define $username y $password
            $User=$_POST['usuario'];
            $Pass=$_POST['password'];
            session_start();
            $_SESSION['usuario']=$User;
            

            require_once '../database/conexion.php';
            $sql = "SELECT NombreCompleto,Usuario FROM users WHERE Usuario = '$User' AND Pass = '$Pass';";
            $query=mysqli_query($conectar,$sql);
            $valor = mysqli_fetch_assoc($query);
            $Filas=mysqli_num_rows($query);

            if ($Filas==1){
                    header("location: admin-area.php"); 
                    $_SESSION['Nombre'] = $valor['NombreCompleto'];
            } else {
                $error = "El correo electrónico o la contraseña es inválida.";	
            }
            mysqli_free_result($query);
            mysqli_close($conectar);
        }
    }
?>
