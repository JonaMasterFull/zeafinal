<?php 


if(isset($_POST['btn-enviar'])){

        $id = $_POST['id'];
        $Email = $_POST['email'];
        $Mensajes = $_POST['mensaje'];

        // Datos para el correo
        $destinatario = "jonytello76@gmail.com";
        $asunto = "Pregunta de Cliente";
        $header = "El mensaje se ha recibido con exito" . "\r\n";
        $header.= "Inicio session en el Administrador de la Pagina";

        try{
            
            require_once '../database/conexion.php';
            $sql = "INSERT INTO mensaje VALUES (Null,'$Email','$Mensajes','$id')";

            $ejecutar = mysqli_query($conectar,$sql);

            if(!$ejecutar){
                mail($destinatario, $asunto, $Mensajes, $header);
                header("Location: ../mensaje-enviado.php");

            }else{
               
                mail($destinatario, $asunto, $Mensajes, $header);
                if($mail){
                    header("Location: ../mensaje-enviado.php");
                }else{
                    header("Location: ../index.php");
                }
                
            }
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>