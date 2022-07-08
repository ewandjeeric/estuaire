<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('../manager/manager.php');

$RDV = array(
    'noms' => htmlspecialchars(filter_input(INPUT_POST, 'noms')),
    'email' => htmlspecialchars(filter_input(INPUT_POST, 'email')),
    'message' => htmlspecialchars(filter_input(INPUT_POST, 'message'))
);



if ($RDV['noms'] == "" || $RDV['email'] == "" || $RDV['message'] == "") {
    echo '<a href="#" id="remplire" class="btn btn-primary" style="color: white;" data-dismiss="modal"> Echec d\'envoie veuillez remplir tous les champs <img src="img/icons8-ok-button-40.png"></a>';
} else {
    
    require_once './vendor/autoload.php';

// Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.tatchexpress.cm', 25))
            ->setUsername('centremedicale@tatchexpress.cm')
            ->setPassword('6EgH#Q1g?E5_')
    ;
 
  $body = '<!DOCTYPE html>
<html>
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
  Message de: '.$RDV['noms'].'
  <br>
  '.$RDV['message'].'
  </p>
  
  <hr style="margin-bottom: 1.5rem!important; margin-top: 1.5rem!important; border: 0; border-top: 1px solid rgba(0,0,0,.1);">
  <p>
  </p>
  <p class="lead">
    <a style="display: inline-block; font-weight: 400; text-align: center; white-space: nowrap; vertical-align: middle; user-select: none; border: 1px solid transparent; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; color: #fff; background-color:#007bff; border-color: #007bff; cursor: pointer;
        padding: .5rem 1rem; font-size: 1.25rem; line-height: 1.5; border-radius: .3rem; text-decoration: none;" href="http://estuaire.tatchexpress.cm/templeate/connexion.php" role="button">
        Se connecter
     </a>
  </p>
</div>
</body>
</html>';

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Rendez-vous'))
            ->setFrom([$RDV['email'] => 'Message'])
            ->setTo(['ewandjeeric@gmail.com', 'giressdelphin@gmail.com'])
            ->setBody($body, 'text/html')
    ;

// Send the message
    if ($mailer->send($message)) {
        echo('<a href="../index.php" class="btn btn-success" style=""><img src="img/icons8-ok-40.png"><span class="lead">Votre message à été envoyé Merci de nous avoir écrire</span></a>');
    } else {
        echo "Echec d'envoie verifiez votre adresse email";
    }
}

