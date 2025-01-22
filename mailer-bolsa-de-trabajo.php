<?php
    /**
     * PHPMailer multiple files upload and send
     */

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';
    require './PHPMailer/Exception.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noreply@grupogeg.com';                     //SMTP username
    $mail->Password   = 'tCQpj#5cHGAh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;
    // $mail->SMTPDebug = 1;

    if (isset($_FILES['userfile']['tmp_name'])) {
        $name = strip_tags(trim($_POST["nombre"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["telefono"]);
        $position = trim($_POST["puesto"]);
        $message = trim($_POST["comentarios"]);

        try {
            //Recipients
            $mail->setFrom('noreply@grupogeg.com', 'Correos Grupo GEG');
            $mail->addAddress('conexion@geg.me');     //Add a recipient
            // $mail->addAddress('');     //Add extra recipient
            $mail->addReplyTo($email, 'Me interesa formar parte de su equipo de trabajo');

            //Attachments
            //Attach multiple files one by one
            if (isset($_FILES['userfile']['tmp_name'])) {
                foreach ($_FILES["userfile"]["name"] as $k => $v) {
                    $mail->AddAttachment( $_FILES["userfile"]["tmp_name"][$k], $_FILES["userfile"]["name"][$k] );
                }
            }

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nuevo Currículum Vitae';
            $mail->Body    = 'Nombre: ' . $name . '<br>Correo electrónico: ' . $email . '<br>Teléfono: ' . $phone . '<br>Puesto deseado: ' . $position . '<br><br>Comentarios:<br>' . $message . '<br><br>Este mensaje fue enviado a través del formulario de contacto del sitio web de GEG.';

            $mail->send();
            echo 'Gracias por contactarnos, nos comunicaremos contigo a la brevedad.';
        } catch (Exception $e) {
            echo 'Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
?>