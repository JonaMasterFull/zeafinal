<?php 
require "../PHPMailer/src/PHPMailer.php";
require "../PHPMailer/src/SMTP.php";
require "../PHPMailer/src/Exception.php";
include '../database/conexion.php';

if(isset($_POST['btn-enviar'])){
   
        try{
            $id = $_POST['idmensaje'];
            $Email = $_POST['email'];
            $Mensajes = $_POST['mensaje'];

            $ContenidoMensaje = "Mensaje Nuevo de : ". $Email . "\r\n";
            $ContenidoMensaje.= "El mensaje Recibido es: " . $Mensajes . "\r\n";
            $ContenidoMensaje.= "¡Ingrese al Administrador para Responder!";

            $mail­ = new PHPMailer\PHPMailer\PHPMailer();

            $mail­->isSMTP();
           
            $mail­->SMTPDebug = 0;

            $mail­->SMTPAuth = true;
            $mail­->SMTPSecure = "ssl";
            $mail­->Host = "smtp.gmail.com";
            $mail­->Port = 465;


            $mail­->Username = "pnuevas466@gmail.com";
            $mail­->Password = "TM2021AB";
            $mail­->SetFrom('pnuevas466@gmail.com', 'Jonathan');
            $mail­->AddReplyTo("Jonathan.Perez@thinkingmachinecenter.com","Francisco");
            $mail­->Subject = "Mensaje Prueba";
            $mail­->MsgHTML($ContenidoMensaje);

            $address = "karengarcia13303@gmail.com";//Correo A enviar


            $mail­->AddAddress($address, "Mensaje Prueba");
             

            if(!$mail­->send()) {
                echo "Error al enviar: " . $mail­->ErrorInfo;
                } else {
                echo "Mensaje enviado!";
                }
                echo "Correo Enviado";

                $sql = "INSERT INTO mensaje VALUES (Null,'$Email','$Mensajes','$id')";
                $ejecutar = mysqli_query($conectar,$sql);
                if(!$ejecutar){
                    header("Location: ../index.php");
                }else{
                    header("Location: ../mensaje-enviado.php");
                }
                
              
            
                

        
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>