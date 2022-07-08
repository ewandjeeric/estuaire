<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();

    
if($_GET['admin'] == '0'){
    
setcookie('username', $_SESSION['username'], time() + 365 * 24 * 3600, null, null, false, true);

header("Location:gestion_rendez_vous.php");
   exit();
}
