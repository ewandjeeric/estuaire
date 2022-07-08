<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('../manager/manager.php');

$her = "";

$tb = array('09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30');

try {
    $bdd = new PDO('mysql:host=localhost;dbname=estuaire;charset=utf8', 'root', '');

    $donnees = $bdd->query('SELECT heure FROM rendez_vous WHERE jour =\'' . $_GET['jour'] . '\'');
    if ($donnees == '') {
        
    } else {
        while ($heure = $donnees->fetch()) {
            foreach ($tb as $key => $value) {
                if ($heure['heure'] == $value) {
                    unset($tb[$key]);
                }
            }
        }
    }
    foreach ($tb as $key => $value) {
        $her .= '*<option class="heures" value="' . $value . '">' . $value . '</option>';
    }
    echo $her;
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

