<?php

function vente_produit_get_all($db){
    //preparation de la requete SQL
    $requete = $db->prepare("select * from vente_produit");

    // execution de la requete SQL
    $requete->execute();

    // convertir les données recuperées en tableau PHP
    $ventesProduits = $requete->fetchAll();

    return $ventesProduits;
}

function vente_produit_get_one($db,$vente_id,$prod_id){

    $sql = "select * from vente_produit where vente_id = :vente_id and prod_id = :prod_id";

    $requete = $db->prepare($sql);

    $requete->bindValue(":vente_id",$vente_id);
    $requete->bindValue(":prod_id",$prod_id);

    $requete->execute();

    $venteProduit = $requete->fetch(PDO::FETCH_ASSOC);

    return $venteProduit;
}


function vente_produit_delete($db,$vente_id,$prod_id){

    $sql = "delete from vente_produit where vente_id = :vente_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":vente_id",$vente_id);

    $requete->execute();

}


function vente_produit_add($db,$vente_id,$prod_id,$vente_qt){

    $sql = "INSERT INTO vente_produit(vente_id,prod_id, vente_qt) 
    VALUES (:vente_id, :prod_id, :vente_qt)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":vente_id",$vente_id);
    $requete->bindValue(":prod_id",$prod_id);
    $requete->bindValue(":vente_qt",$vente_qt);
    
    $requete->execute();
}


function vente_produit_update($db,$vente_id,$prod_id,$vente_qt){      
    $sql = "UPDATE vente_produit SET prod_id= :prod_id, vente_qt= :vente_qt,
      WHERE vente_id= :vente_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":vente_id",$vente_id); 
    $requete->bindValue(":prod_id",$prod_id);
    $requete->bindValue(":vente_qt",$vente_qt);
         
    $requete->execute();

}