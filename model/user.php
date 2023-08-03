<?php

function checkUser($db,$username,$mdp){

$sql = "select user_id,user_nom, user_prenom, user_username, user_mdp, user_email, role_id from user 
where user_username = :user_username and user_mdp = :user_mdp";

$requete = $db->prepare($sql);

//afficher l'utilisateur

$requete->bindValue(":user_username",$username);
$requete->bindValue(":user_mdp",$mdp);

$requete->execute();

//verifier esq lutili est juste
$connect = $requete->fetch(PDO::FETCH_ASSOC);               

return $connect;
}


function user_get_all($db){
    $requete = $db->prepare("select * from user 
    inner join role on user.role_id = role.role_id");

    $requete->execute();

    $users = $requete->fetchAll();

    return $users;
}

function user_get_one($db,$user_id){

    $sql = "select * from user where user_id = :user_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":user_id",$user_id);

    $requete->execute();

    $user = $requete->fetch(PDO::FETCH_ASSOC);

    return $user;
}


function user_delete($db,$user_id){

    $sql = "delete from user where user_id = :user_id ";

    $requete = $db->prepare($sql);

    $requete->bindValue(":user_id",$user_id);

    $requete->execute();

}


function user_add($db,$user_nom, $user_prenom, $user_username, $user_mdp, $user_email, $role_id){

    $sql = "INSERT INTO user(user_nom, user_prenom, user_username, user_mdp, user_email, role_id) 
    VALUES (:user_nom, :user_prenom, :user_username, :user_mdp, :user_email, :role_id)";

    $requete = $db->prepare($sql);

    $requete->bindValue(":user_nom",$user_nom);
    $requete->bindValue(":user_prenom",$user_prenom);
    $requete->bindValue(":user_username",$user_username);
    $requete->bindValue(":user_mdp",$user_mdp);
    $requete->bindValue(":user_email",$user_email);
    $requete->bindValue(":role_id",$role_id);

    $requete->execute();


}


function user_update($db,$user_id, $user_nom, $user_prenom, $user_username, $user_mdp, $user_email, $role_id){      
    $sql = "UPDATE user SET user_nom= :user_nom, user_prenom= :user_prenom, user_username= :user_username, user_mdp= :user_mdp, user_email= :user_email, role_id= :role_id 
    WHERE user_id= :user_id";             

    $requete = $db->prepare($sql); 

    $requete->bindValue(":user_id",$user_id); 
    $requete->bindValue(":user_nom",$user_nom);
    $requete->bindValue(":user_prenom",$user_prenom);
    $requete->bindValue(":user_username",$user_username);
    $requete->bindValue(":user_mdp",$user_mdp);
    $requete->bindValue(":user_email",$user_email);
    $requete->bindValue(":role_id",$role_id);       
    

    $requete->execute();

}