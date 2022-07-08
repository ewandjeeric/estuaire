<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions

function send_email(&$RDV){

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'vps-183.camoo.net';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@beco.cm';                     // SMTP username
    $mail->Password   = 'Express@1234';                               // SMTP password
    $mail->SMTPSecure = 'STARTTLS';         // Enable TLS encryption;
    $mail->Port       = 587;                                    // TCP port to connect to, use

    //Recipients
    $mail->setFrom('info@beco.cm', 'Nouveau rendez-vous');
    $mail->addAddress('ewandjeeric@gmail.com');     // Add a recipient
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name



    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Rendez-vous';
    $mail->Body    = '<!DOCTYPE html> <html>
    <body>
  <meta charset="utf-8">
   <div style="
    padding-top: 4rem;
    padding-right: 2rem;
    padding-bottom: 4rem;
    padding-left: 2rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: .3rem;
    ">

  <img src="https://tatchexpress.cm/wp-content/uploads/2020/07/imageonline-co-whitebackgroundremoved-2.png" style="display: flex; float: top;">
  <p style="font-size: 1.25rem; font-weight: 300; margin-top: 0; margin-bottom: 1rem;">
  Rendez-vous de: ' . $RDV['motif'] . ' pris par ' . $RDV['noms'] . ' le ' . $RDV['jour'] . ' à ' . $RDV['heure'] . ' dans le service de ' . $RDV['service'] . '
  </p>
  <hr style="margin-bottom: 1.5rem!important; margin-top: 1.5rem!important; border: 0; border-top: 1px solid rgba(0,0,0,.1);">
  <p>
  Pour modifier le Rendez-vous veuillez vous connecter.
  </p>
  <p class="lead">
    <a style="display: inline-block; font-weight: 400; text-align: center; white-space: nowrap; vertical-align: middle; user-select: none; border: 1px solid transparent; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; color: #fff; background-color:#007bff; border-color: #007bff; cursor: pointer;
        padding: .5rem 1rem; font-size: 1.25rem; line-height: 1.5; border-radius: .3rem; text-decoration: none;" href="http://estuaire.local/templeate/connexion.php" role="button">
        Se connecter
     </a>
  </p>
</div>
</body>
</html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){

  //  return '<a href="../index.php" class="btn btn-success" style=""><img src="img/icons8-ok-40.png"><span class="lead"> Rendez-vous pris le ' . $RDV['jour'] . ' à ' . $RDV['heure'] . '</span></a>';
        echo "ACCEPTED";
}
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}