<?php

function categorie_get_all($db){
        
    $requete = $db->prepare("select * from categorie");
    $requete->execute();
    $categories = $requete->fetchAll();
    return $categories;
}

function categorie_get_one($db,$cat_id){                             

    $sql = "select * from categorie where cat_id = :cat_id";                    
    
    $requete = $db->prepare($sql);
    
    $requete->bindValue(":cat_id",$cat_id);

    $requete->execute();

    $categorie = $requete->fetch(PDO::FETCH_ASSOC);           

    return $categorie;
}


function categorie_delete($db,$cat_id){

    $sql = "delete from categorie where cat_id = :cat_id";
    
    $requete = $db->prepare($sql);
    
    $requete->bindValue(":cat_id",$cat_id);

    $requete->execute();

}


function categorie_add($db,$cat_libelle){

    $sql = "INSERT INTO categorie(cat_libelle) 
    VALUES (:cat_libelle)";                                 
    
    $requete = $db->prepare($sql);                                                                            
                                                              
    $requete->bindValue(":cat_libelle",$cat_libelle);
    
    $requete->execute();    
}


function categorie_update($db, $cat_id, $cat_libelle){                
    $sql = "UPDATE categorie SET cat_libelle= :cat_libelle
     WHERE cat_id= :cat_id";                       

    $requete = $db->prepare($sql); 

    $requete->bindValue(":cat_id",$cat_id); 
    $requete->bindValue(":cat_libelle",$cat_libelle);           
   
    $requete->execute();

}