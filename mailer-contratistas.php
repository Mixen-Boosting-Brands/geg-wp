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

    if (isset($_FILES['cont-userfile']['tmp_name'])) {
        // Contacto administrativo
        $name = strip_tags(trim($_POST["cont-nombre-administrativo"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["cont-correo-administrativo"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["cont-telefono-administrativo"]);
        $mobile = trim($_POST["cont-telefono-celular-administrativo"]);

        // Contacto ventas
        $nameSales = strip_tags(trim($_POST["cont-nombre-ventas"]));
        $nameSales = str_replace(array("\r","\n"),array(" "," "),$nameSales);
        $emailSales = filter_var(trim($_POST["cont-correo-ventas"]), FILTER_SANITIZE_EMAIL);
        $phoneSales = trim($_POST["cont-telefono-ventas"]);
        $mobileSales = trim($_POST["cont-telefono-celular-ventas"]);

        // Apartado legal
        $socialReason = trim($_POST["cont-razon-social"]);
        $commercialName = trim($_POST["cont-nombre-comercial"]);
        $location = trim($_POST["cont-ubicacion"]);

        // Especialización
        $speciality = trim($_POST["cont-especialidad"]);

        // Financiero
        $accountingCapital = trim($_POST["cont-capital-contable"]);
        $strenghtening = trim($_POST["cont-afianzadora"]);
        $yearlySales = trim($_POST["cont-volumen"]);
        $financeProcessing = trim($_POST["cont-tramitar-fianzas"]);

        // Experiencia
        $relevantProjects = trim($_POST["cont-proyectos-relevantes"]);

        // Seguridad
        $safetyAndHygiene = trim($_POST["cont-seguridad-e-higiene"]);
        $yearsOfExperience = trim($_POST["cont-anos-de-experiencia"]);
        $certifications = trim($_POST["cont-certificaciones"]);
        $coursesTaken = trim($_POST["cont-cursos-tomados"]);

        // Calidad
        $quality = trim($_POST["cont-garantia"]);
        $qualityPolicies = trim($_POST["cont-politicas-garantia"]);

        try {
            //Recipients
            $mail->setFrom('noreply@grupogeg.com', 'Correos Grupo GEG');
            $mail->addAddress('conexion@geg.me');     //Add a recipient
            // $mail->addAddress('');     //Add extra recipient
            $mail->addReplyTo($email, 'Me interesa recibir más información');

            //Attachments
            //Attach multiple files one by one
            if (isset($_FILES['cont-userfile']['tmp_name'])) {
                foreach ($_FILES["cont-userfile"]["name"] as $k => $v) {
                    $mail->AddAttachment( $_FILES["cont-userfile"]["tmp_name"][$k], $_FILES["cont-userfile"]["name"][$k] );
                }
            }

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nuevo mensaje de proveedores y contratistas';
            $mail->Body    = '<h1>Contacto administrativo</h1><br><br>Nombre: ' . $name . '<br>Correo electrónico: ' . $email . '<br>Teléfono: ' . $phone . '<br>Teléfono celular: ' . $mobile . '<br><br><h1>Contacto ventas</h1><br><br>Nombre: ' .  $nameSales . '<br>Correo electrónico: ' . $emailSales . '<br>Teléfono: ' . $phoneSales . '<br>Teléfono celular: ' . $mobileSales . '<br><br><h1>Apartado legal</h1><br><br>Razón social: ' . $socialReason . '<br>Nombre comercial: ' . $commercialName . '<br>Ubicación: ' . $location . '<br><br><h1>Especialización</h1><br><br>Especialidad de la empresa: ' . $speciality . '<br><br><h1>Financiero</h1><br><br>Capital contable: $' . $accountingCapital . '<br>Afianzadora: ' . $strenghtening . '<br>Volumen anual de ventas: $' . $yearlySales . '<br>¿Puede tramitar fianzas?: ' . $financeProcessing . '<br><br><h1>Experiencia</h1><br><br>Proyectos relevantes (últimos 3 años):<br>' . $relevantProjects . '<br><br><h1>Seguridad</h1><br><br>¿Cuenta con personal especializado en Seguridad e Higiene?<br>' . $safetyAndHygiene . '<br><br>Años de experiencia:<br>' . $yearsOfExperience . '<br><br>Certificaciones:<br>' . $certifications . '<br><br>Cursos tomados:<br>' . $coursesTaken . '<br><br><h1>Calidad</h1><br><br>¿Cómo garantiza su empresa la calidad de sus productos o equipos que suministra?<br>' . $quality . '<br><br>Describa sus políticas de garantía:<br>' . $qualityPolicies . '<br><br>Este mensaje fue enviado a través del formulario de contacto del sitio web de GEG.';

            $mail->send();
            echo 'Gracias por contactarnos, nos comunicaremos contigo a la brevedad.';
        } catch (Exception $e) {
            echo 'Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
?>