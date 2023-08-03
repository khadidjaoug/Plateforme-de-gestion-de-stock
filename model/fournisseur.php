<?php

function fournisseur_get_all($db){
    $requete = $db->prepare("select * from fournisseur");

    $requete->execute();

    $fournisseurs = $requete->fetchAll();

    return $fournisseurs;
}

function fournisseur_get_one($db,$fournisseur_id){

    $sql = "select * from fournisseur where fournisseur_id = :fournisseur_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":fournisseur_id",$fournisseur_id);

    $requete->execute();

    $fournisseur = $requete->fetch(PDO::FETCH_ASSOC);

    return $fournisseur;
}


function fournisseur_add($db,$fournisseur_nom, $fournisseur_prenom, $fournisseur_telephone, $fournisseur_adresse, $fournisseur_email){

    $sql = "INSERT INTO fournisseur(fournisseur_nom, fournisseur_prenom, fournisseur_telephone, fournisseur_adresse, fournisseur_email)
            VALUES (:fournisseur_nom, :fournisseur_prenom, :fournisseur_telephone, :fournisseur_adresse, :fournisseur_email)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":fournisseur_nom",$fournisseur_nom);
    $requete->bindValue(":fournisseur_prenom",$fournisseur_prenom);
    $requete->bindValue(":fournisseur_telephone",$fournisseur_telephone);
    $requete->bindValue(":fournisseur_adresse",$fournisseur_adresse);
    $requete->bindValue(":fournisseur_email",$fournisseur_email);
    
    $requete->execute();

}

function fournisseur_update($db,$fournisseur_id, $fournisseur_nom, $fournisseur_prenom, $fournisseur_telephone, $fournisseur_adresse, $fournisseur_email){      
    $sql = "UPDATE fournisseur SET fournisseur_nom= :fournisseur_nom, fournisseur_prenom= :fournisseur_prenom, fournisseur_telephone= :fournisseur_telephone,
     fournisseur_adresse= :fournisseur_adresse, fournisseur_email= :fournisseur_email 
    WHERE fournisseur_id= :fournisseur_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":fournisseur_id",$fournisseur_id); 
    $requete->bindValue(":fournisseur_nom",$fournisseur_nom);
    $requete->bindValue(":fournisseur_prenom",$fournisseur_prenom);
    $requete->bindValue(":fournisseur_telephone",$fournisseur_telephone);
    $requete->bindValue(":fournisseur_adresse",$fournisseur_adresse);
    $requete->bindValue(":fournisseur_email",$fournisseur_email);
     
    $requete->execute();

}

function fournisseur_delete($db,$fournisseur_id){

    $sql = "delete from fournisseur where fournisseur_id = :fournisseur_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":fournisseur_id",$fournisseur_id);

    $requete->execute();

}

function fournisseur_get_last($db){
    $sql = "select * from fournisseur order by fournisseur_id desc limit 1";

    $requete = $db->prepare($sql);

    $requete->execute();

    $fournisseur = $requete->fetch(PDO::FETCH_ASSOC);

    return $fournisseur;
}