<?php
include ('../manager/manager.php');
include('update_jour.php');

$RDV = array(
    'id' => htmlspecialchars(filter_input(INPUT_POST, 'id')),
    'noms' => htmlspecialchars(filter_input(INPUT_POST, 'noms')),
    'telephone' => htmlspecialchars(filter_input(INPUT_POST, 'telephone')),
    'jour' => filter_input(INPUT_POST, 'jour'),
    'heure' => strval(filter_input(INPUT_POST, 'heure'))

);

$RDV['jour'] = date('d-m-Y', strtotime($RDV['jour']));

update_rdv($RDV);
$b = send_message($RDV);
header('Location:../templeate/gestion_rendez_vous.php');