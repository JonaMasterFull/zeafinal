<?php 

require_once '../database/conexion.php';

if(isset($_POST['btn-enviar'])){
   
        try{

            $id = $_POST['id'];
            $Email = $_POST['email'];
            $Mensajes = $_POST['mensaje'];
            $título = 'Recordatorio de cumpleaños para Agosto';
            
    
             //Datos para el correo
            $FromEmail = "valverdefrancisco907@gmail.com". ",";
            $FromEmail.= "perezaguirre414@gmail.com";



            mail($FromEmail, $título, $Mensajes);
                if(!mail){

                    header("Location: ../index.php");
                }else{
                    $sql = "INSERT INTO mensaje VALUES (Null,'$Email','$Mensajes','$id')";

                    $ejecutar = mysqli_query($conectar,$sql);                                        
                    header("Location: ../mensaje-enviado.php");
                }
        
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>