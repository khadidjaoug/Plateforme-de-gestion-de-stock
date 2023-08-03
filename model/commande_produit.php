<?php

function commande_produit_get_all($db){
    //preparation de la requete SQL
    $requete = $db->prepare("select * from commande_produit");

    // execution de la requete SQL
    $requete->execute();

    // convertir les données recuperées en tableau PHP
    $commandesProduits = $requete->fetchAll();

    return $commandesProduits;
}

function commande_produit_get_one($db,$commande_id,$prod_id){

    $sql = "select * from commande_produit where commande_id = :commande_id and prod_id = :prod_id";

    $requete = $db->prepare($sql);

    $requete->bindValue(":commande_id",$commande_id);
    $requete->bindValue(":prod_id",$prod_id);

    $requete->execute();

    $commandeProduit = $requete->fetch(PDO::FETCH_ASSOC);

    return $commandeProduit;
}


function commande_produit_delete($db,$commande_id,$prod_id){

    $sql = "delete from commande_produit where commande_id = :commande_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":commande_id",$commande_id);

    $requete->execute();

}


function commande_produit_add($db,$commande_id,$prod_id,$commande_qt){

    $sql = "INSERT INTO commande_produit(commande_id,prod_id, commande_qt) 
    VALUES (:commande_id, :prod_id, :commande_qt)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":commande_id",$commande_id);
    $requete->bindValue(":prod_id",$prod_id);
    $requete->bindValue(":commande_qt",$commande_qt);
    
    $requete->execute();
}


function commande_produit_update($db,$commande_id,$prod_id,$commande_qt){      
    $sql = "UPDATE commande_produit SET prod_id= :prod_id, commande_qt= :commande_qt,
      WHERE commande_id= :commande_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":commande_id",$commande_id); 
    $requete->bindValue(":prod_id",$prod_id);
    $requete->bindValue(":commande_qt",$commande_qt);
         
    $requete->execute();

}