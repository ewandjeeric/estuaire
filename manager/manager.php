<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function bdd(){

    return $bdd = new PDO('mysql:host=localhost;dbname=estuaire;charset=utf8', 'root', '');
}


/**
 * Inserer un rendez-vous dans la table rendez-vous
 * @param type $RDV
 */
function prendre_rendez_vous(&$RDV) {
    try {

        //On définit le mode d'erreur de PDO sur Exception
        bdd()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = bdd()->prepare("INSERT INTO rendez_vous (noms, email, telephone, quartier, jour, heure, service, ville, motif, patient) VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $requete->bindParam(1, $RDV['noms']);
        $requete->bindParam(2, $RDV['email']);
        $requete->bindParam(3, $RDV['telephone']);
        $requete->bindParam(4, $RDV['quartier']);
        $requete->bindParam(5, $RDV['jour']);
        $requete->bindParam(6, $RDV['heure']);
        $requete->bindParam(7, $RDV['service']);
        $requete->bindParam(8, $RDV['ville']);
        $requete->bindParam(9, $RDV['motif']);
        $requete->bindParam(10, $RDV['patient']);

        $requete->execute();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

/**
 * 
 * @return type tous les élèments de la table rendez-vous
 */
function getlist() {
    try {

        return $requete = bdd()->query('SELECT * FROM rendez_vous');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}


/**
 * 
 * @return type tous les élèments de la table rendez-vous
 */
function get_order_list() {
    try {

        return $requete = bdd()->query('SELECT * FROM rendez_vous ORDER BY jour');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

/**
 * 
 * @return type tous les élèments de la table user
 */
function connexion() {
    try {

        return $requete = bdd()->query('SELECT * FROM user');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

/**
 * Selection de tous les élèments de la base de données de le table rendez-vous donc le jour égale à $a
 * @param type $a
 * @return type liste de données
 */
function getselectall($a) {
    try {

        return $donnees = bdd()->query('SELECT * FROM rendez_vous WHERE jour =\'' . $a . '\'');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

/**
 * modifier un rende
 * @param type $a
 * @return type liste de données
 */
function update_rdv(&$RDV){

    //On définit le mode d'erreur de PDO sur Exception
    bdd()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $req = bdd()->prepare('UPDATE rendez_vous SET jour = :jour, heure = :heure WHERE id = :id');
       $req->execute(array(
       'jour' => $RDV['jour'],
       'heure' => $RDV['heure'],
       'id' => $RDV['id']
       ));
  
}
