<?php

function produit_get_all($db){
    //preparation de la requete SQL
    $requete = $db->prepare("select * from produit 
    inner join categorie on produit.cat_id = categorie.cat_id");

    // execution de la requete SQL
    $requete->execute();

    // convertir les données recuperées en tableau PHP
    $produits = $requete->fetchAll();

    return $produits;
}

function produit_get_one($db,$prod_id){

    $sql = "select * from produit where prod_id = :prod_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":prod_id",$prod_id);

    $requete->execute();

    $produit = $requete->fetch(PDO::FETCH_ASSOC);

    return $produit;
}


function produit_delete($db,$prod_id){

    $sql = "delete from produit where prod_id = :prod_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":prod_id",$prod_id);

    $requete->execute();

}


function produit_add($db,$prod_nom, $prod_design, $prod_qt, $prod_prix, $cat_id){

    $sql = "INSERT INTO produit(prod_nom, prod_design, prod_qt, prod_prix, cat_id) 
    VALUES (:prod_nom, :prod_design, :prod_qt, :prod_prix, :cat_id)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":prod_nom",$prod_nom);
    $requete->bindValue(":prod_design",$prod_design);
    $requete->bindValue(":prod_qt",$prod_qt);
    $requete->bindValue(":prod_prix",$prod_prix);
    $requete->bindValue(":cat_id",$cat_id);

    $requete->execute();


}


function produit_update($db,$prod_id, $prod_nom, $prod_design, $prod_qt, $prod_prix, $cat_id){      
    $sql = "UPDATE produit SET prod_nom= :prod_nom, prod_design= :prod_design, prod_qt= :prod_qt, prod_prix= :prod_prix, cat_id= :cat_id WHERE prod_id= :prod_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":prod_id",$prod_id); 
    $requete->bindValue(":prod_nom",$prod_nom);
    $requete->bindValue(":prod_design",$prod_design);
    $requete->bindValue(":prod_qt",$prod_qt);
    $requete->bindValue(":prod_prix",$prod_prix);
    $requete->bindValue(":cat_id",$cat_id);       
    

    $requete->execute();

}