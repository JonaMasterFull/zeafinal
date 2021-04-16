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

                //Crear una instancia de PHPMailer
                $mail = new PHPMailer\PHPMailer\PHPMailer();
                //Definir que vamos a usar SMTP
                $mail->IsSMTP();
                //Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
                // 0 = off (producción)
                // 1 = client messages
                // 2 = client and server messages
                $mail->SMTPDebug  = 1;
                //Ahora definimos gmail como servidor que aloja nuestro SMTP
                $mail->Host       = 'smtp.gmail.com';
                //El puerto será el 587 ya que usamos encriptación TLS
                $mail->Port       = 587;
                //Definmos la seguridad como TLS
                $mail->SMTPSecure = 'tls';
                //Tenemos que usar gmail autenticados, así que esto a TRUE
                $mail->SMTPAuth   = true;
                //Definimos la cuenta que vamos a usar. Dirección completa de la misma
                $mail->Username   = "Jonathan.Perez@thinkingMachinecenter";
                //Introducimos nuestra contraseña de gmail
                $mail->Password   = "56899Jona2010";
                //Definimos el remitente (dirección y, opcionalmente, nombre)
                $mail->SetFrom('jonytello76@gmail.com', 'Mi nombre');
                //Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
                $mail->AddReplyTo('perezaguirre414@gmail.com','El de la réplica');
                //Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
                $mail->AddAddress('jonytello76@gmail.com', 'El Destinatario');
                //Definimos el tema del email
                $mail->Subject = 'Esto es un correo de prueba';
                //Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
               
                //Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
                $mail->AltBody = $Mensajes;
                //Enviamos el correo
                if(!$mail->Send()) {
                echo "Error: " . $mail->ErrorInfo;
                } else {
                echo "Enviado!";
                }
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>