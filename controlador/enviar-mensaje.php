<?php 
include("../PHPMailer/src/PHPMailer.php");
include("../PHPMailer/src/SMTP.php");
include("../PHPMailer/src/Exception.php");
require_once '../database/conexion.php';

if(isset($_POST['btn-enviar'])){
   
        try{

            $id = $_POST['id'];
            $Email = $_POST['email'];
            $Mensajes = $_POST['mensaje'];
            $subject = "Pregunta Recibida";
            
    
            // Datos para el correo
            $FromEmail = "jonytello76@gmail.com";//Correo Integrado para mandar correos
            $FromName = "Jonathan Aldair";
            $host = "smtp.live.com";
            $port = "587";
            $SMTPAuth = "login";
            $SMTPSecure = "tls";
            $Password = "56899Jona2010";// Contraseña del correo a mandar

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = $host;
            $mail->Port = $port;
            $mail->SMTPAuth = $SMTPAuth;
            $mail->SMTPSecure = $SMTPSecure;

            /*$mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );*/

            $mail->Username = $FromEmail;
            $mail->Password = $Password;
            
            $mail->setFrom($FromEmail, $FromName);
            $mail->addAddress($Email);
            $mail->isHTML(true);
            
            $mail->Subject = $subject;
           
            $mail->Body = $Mensajes;
            
            if(!$mail->send()){
                echo "Mailer: No se pudo Enviar ";die();
            }else{
                echo "Correo Enviado";die();
                $sql = "INSERT INTO mensaje VALUES (Null,'$Email','$Mensajes','$id')";

                $ejecutar = mysqli_query($conectar,$sql);

                mail($FromEmail, $subject, $Mensajes);                    
                header("Location: ../mensaje-enviado.php");
            }
               
            

        
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>