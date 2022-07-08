<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ('../manager/manager.php');

$personnel = array(
    'username' => htmlspecialchars(filter_input(INPUT_POST, 'username')),
    'password' => htmlspecialchars(md5(filter_input(INPUT_POST, 'password')))
);

$donnees = connexion();

while ($user = $donnees->fetch()) {

    if (($user['username'] == $personnel['username']) && ($user['password'] == $personnel['password'])) {
        session_start();
        $_SESSION['username'] = $user['username'];


        header("Location:../templeate/session.php?admin=0");
        exit();
    }
}
$donnees->closeCursor();
header("Location:../templeate/connexion.php");
exit();
