<?php

function role_get_all($db){
    $requete = $db->prepare("select * from role");

    $requete->execute();

    $roles = $requete->fetchAll();

    return $roles;
}

function role_get_one($db,$role_id){

    $sql = "select * from role where role_id = :role_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":role_id",$role_id);

    $requete->execute();

    $role = $requete->fetch(PDO::FETCH_ASSOC);

    return $role;
}


function role_delete($db,$role_id){

    $sql = "delete from role where role_id = :role_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":role_id",$role_id);

    $requete->execute();

}


function role_add($db,$role_nom){

    $sql = "INSERT INTO role(role_nom) VALUES (:role_nom)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":role_nom",$role_nom);

    $requete->execute();


}


function role_update($db,$role_id, $role_nom){      
    $sql = "UPDATE role SET role_nom= :role_nom WHERE role_id= :role_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":role_id",$role_id); 
    $requete->bindValue(":role_nom",$role_nom);
       
    $requete->execute();

}