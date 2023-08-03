<?php

function client_get_all($db){
    $requete = $db->prepare("select * from client");

    $requete->execute();

    $clients = $requete->fetchAll();

    return $clients;
}

function client_get_one($db,$client_id){

    $sql = "select * from client where client_id = :client_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":client_id",$client_id);

    $requete->execute();

    $client = $requete->fetch(PDO::FETCH_ASSOC);

    return $client;
}


function client_add($db,$client_nom, $client_prenom, $client_telephone, $client_adresse, $client_email){

    $sql = "INSERT INTO client(client_nom, client_prenom, client_telephone, client_adresse, client_email)
            VALUES (:client_nom, :client_prenom, :client_telephone, :client_adresse, :client_email)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":client_nom",$client_nom);
    $requete->bindValue(":client_prenom",$client_prenom);
    $requete->bindValue(":client_telephone",$client_telephone);
    $requete->bindValue(":client_adresse",$client_adresse);
    $requete->bindValue(":client_email",$client_email);

    
    $requete->execute();

}

function client_update($db,$client_id, $client_nom, $client_prenom, $client_telephone, $client_adresse, $client_email){      
    $sql = "UPDATE client SET client_nom= :client_nom, client_prenom= :client_prenom, client_telephone= :client_telephone,
     client_adresse= :client_adresse, client_email= :client_email
    WHERE client_id= :client_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":client_id",$client_id); 
    $requete->bindValue(":client_nom",$client_nom);
    $requete->bindValue(":client_prenom",$client_prenom);
    $requete->bindValue(":client_telephone",$client_telephone);
    $requete->bindValue(":client_adresse",$client_adresse);
    $requete->bindValue(":client_email",$client_email);      

    $requete->execute();

}

function client_delete($db,$client_id){

    $sql = "delete from client where client_id = :client_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":client_id",$client_id);

    $requete->execute();

}

function client_get_last($db){
    $sql = "select * from client order by client_id desc limit 1";

    $requete = $db->prepare($sql);

    $requete->execute();

    $client = $requete->fetch(PDO::FETCH_ASSOC);

    return $client;
}