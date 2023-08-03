<?php

function commande_get_all($db){
    //preparation de la requete SQL
    $requete = $db->prepare("select * from commande 
    inner join fournisseur on commande.fournisseur_id = fournisseur.fournisseur_id");

    // execution de la requete SQL
    $requete->execute();

    // convertir les données recuperées en tableau PHP
    $commandes = $requete->fetchAll();

    return $commandes;
}

function commande_get_one($db,$commande_id){

    $sql = "select * from commande where commande_id = :commande_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":commande_id",$commande_id);

    $requete->execute();

    $commande = $requete->fetch(PDO::FETCH_ASSOC);

    return $commande;
}


function commande_delete($db,$commande_id){

    $sql = "delete from commande where commande_id = :commande_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":commande_id",$commande_id);

    $requete->execute();

}


function commande_add($db,$commande_date, $fournisseur_id){

    $sql = "INSERT INTO commande(commande_date, fournisseur_id) 
    VALUES (:commande_date, :fournisseur_id)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":commande_date",$commande_date);
    $requete->bindValue(":fournisseur_id",$fournisseur_id);
   
  
    $requete->execute();


}


function commande_update($db,$commande_id, $commande_date,$fournisseur_id){      
    $sql = "UPDATE commande SET commande_date= :commande_date,
     fournisseur_id= :fournisseur_id WHERE commande_id= :commande_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":commande_id",$commande_id); 
    $requete->bindValue(":commande_date",$commande_date);
    $requete->bindValue(":fournisseur_id",$fournisseur_id);
         
    $requete->execute();

}


function commande_get_last($db){
    $sql = "select * from commande order by commande_id desc limit 1";

    $requete = $db->prepare($sql);

    $requete->execute();

    $commande = $requete->fetch(PDO::FETCH_ASSOC);

    return $commande;
}