<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ('../manager/manager.php');
include('send_email.php');
include('change_rendez_vous.php');

$RDV = array(
    'noms' => htmlspecialchars(filter_input(INPUT_POST, 'noms')) . ' ' . htmlspecialchars(filter_input(INPUT_POST, 'prenoms')),
    'email' => htmlspecialchars(filter_input(INPUT_POST, 'email')),
    'telephone' => htmlspecialchars(filter_input(INPUT_POST, 'telephone')),
    'quartier' => htmlspecialchars(filter_input(INPUT_POST, 'quartier')),
    'jour' => filter_input(INPUT_POST, 'jour'),
    'heure' => strval(filter_input(INPUT_POST, 'heure')),
    'service' => htmlspecialchars(filter_input(INPUT_POST, 'service')),
    'motif' => htmlspecialchars(filter_input(INPUT_POST, 'motif')),
    'patient' => htmlspecialchars(filter_input(INPUT_POST, 'patient')),
    'ville' => htmlspecialchars(filter_input(INPUT_POST, 'ville')),
    'nom' => htmlspecialchars(filter_input(INPUT_POST, 'noms'))
);



if ($RDV['noms'] == "" || $RDV['email'] == "" || $RDV['telephone'] == "" || $RDV['quartier'] == "" || $RDV['jour'] == "" || $RDV['heure'] == "") {
    echo '<a href="#" id="remplire" class="btn btn-primary" style="color: white;" data-dismiss="modal"> Echec d\'envoie veuillez remplir tous les champs <img src="img/icons8-ok-button-40.png"></a>';
} else {

       prendre_rendez_vous($RDV);

       send_email($RDV);

}

