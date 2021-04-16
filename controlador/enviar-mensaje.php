<?php 
include("../PHPMailer/src/PHPMailer.php");


if(isset($_POST['btn-enviar'])){
   
        try{
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->isSMTP();
            var_dump("1111111111111111111");
            die();
            $mail->SMTPDebug = 0;
            $mail->Host = $this->_host;
            $mail->Port = $this->_port;
            $mail->SMTPAuth =$this->_SMTPAuth;
            $mail->SMTPSecure = $this->_SMTPSecure;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->Username = $this->_Username;
            $mail->Password = $this->_Password;
            $mail->setFrom($this->_Username, $this->_Password);

            if(is_array($emailTo)){
                foreach ($emailTo as $Key => $value){
                    $mail->addAddress($value);
                }
            }else{
                $mail->addAddress($emailTo);
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;

        
        }catch(Exception $e){
            echo "Error: " . $e -> getMessage();
        }
}

?>