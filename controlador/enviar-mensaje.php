<?php 


if(isset($_POST['btn-enviar'])){

        $id = $_POST['id'];
        $Email = $_POST['email'];
        $Mensajes = $_POST['mensaje'];

        // Datos para el correo
        $destinatario = "perezaguirre414@gmail.com";
        $asunto = "Pregunta de Cliente";
        $MensajeCompleto = $Mensajes . "\nAtentamente: " . $Email;
        $header = "El mensaje se ha recibido con exito" . "\r\n";
        $header.= "Inicio session en el Administrador de la Pagina" . phpversion();

        try{
            
            require_once '../database/conexion.php';
            $sql = "INSERT INTO mensaje VALUES (Null,'$Email','$Mensajes','$id')";

            $ejecutar = mysqli_query($conectar,$sql);

                mail($destinatario, $asunto, $MensajeCompleto, $header);                    
                header("Location: ../mensaje-enviado.php");
               
                

        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>