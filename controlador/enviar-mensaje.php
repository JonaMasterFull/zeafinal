<?php 


if(isset($_POST['btn-enviar'])){

        $id = $_POST['id'];
        $Email = $_POST['email'];
        $Mensajes = $_POST['mensaje'];

        // Datos para el correo
        $destinatario = "perezaguirre414@gmail.com";
        $asunto = "Pregunta de Cliente";
        $MensajeCompleto = $Mensajes . "\nAtentamente: " . $Email;
        $cabeceras = 'From: '. $Email . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        try{
            
            require_once '../database/conexion.php';
            $sql = "INSERT INTO mensaje VALUES (Null,'$Email','$Mensajes','$id')";

            $ejecutar = mysqli_query($conectar,$sql);

                mail($destinatario, $asunto, $MensajeCompleto, $cabeceras);                    
                header("Location: ../mensaje-enviado.php");


        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>