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

            /*
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


            $mail->Username = $FromEmail;
            $mail->Password = $Password;
            
            $mail->setFrom($FromEmail, $FromName);
            $mail->addAddress($Email);
            $mail->isHTML(true);
            
            $mail->Subject = $subject;
           
            $mail->Body = $Mensajes;
            $mail->send();
*/

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";



mail($FromEmail, $título, $Mensajes, $cabeceras);
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