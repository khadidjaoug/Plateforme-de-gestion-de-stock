<?php

function vente_get_all($db){
    //preparation de la requete SQL
    $requete = $db->prepare("select * from vente 
    inner join client on vente.client_id = client.client_id");

    // execution de la requete SQL
    $requete->execute();

    // convertir les données recuperées en tableau PHP
    $ventes = $requete->fetchAll();

    return $ventes;
}

function vente_get_one($db,$vente_id){

    $sql = "select * from vente where vente_id = :vente_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":vente_id",$vente_id);

    $requete->execute();

    $vente = $requete->fetch(PDO::FETCH_ASSOC);

    return $vente;
}


function vente_delete($db,$vente_id){

    $sql = "delete from vente where vente_id = :vente_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":vente_id",$vente_id);

    $requete->execute();

}


function vente_add($db,$vente_date, $client_id){

    $sql = "INSERT INTO vente(vente_date, client_id, user_id) 
    VALUES (:vente_date, :client_id)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":vente_date",$vente_date);
    $requete->bindValue(":client_id",$client_id);
  
    $requete->execute();


}


function vente_update($db,$vente_id, $vente_date,$client_id){      
    $sql = "UPDATE vente SET vente_date= :vente_date,
     client_id= :client_id WHERE vente_id= :vente_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":vente_id",$vente_id); 
    $requete->bindValue(":vente_date",$vente_date);
    $requete->bindValue(":client_id",$client_id);
         
    $requete->execute();

}


function vente_get_last($db){
    $sql = "select * from vente order by vente_id desc limit 1";

    $requete = $db->prepare($sql);

    $requete->execute();

    $vente = $requete->fetch(PDO::FETCH_ASSOC);

    return $vente;
}