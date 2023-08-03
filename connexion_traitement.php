<?php 
include('model/database.php');
include('model/user.php');

$db = db_connect();

//recuperation des donnees saisies
$user = $_POST["username"];
$mdp = $_POST["mdp"];

//verification du compte utilisateur
if (checkUser($db,$user,$mdp))
{
    //creation d'une session utilisateur
    session_start();
    $_SESSION['username'] = $user;                               //c'est un tableau
    $_SESSION['user_id'] = 1;                               //c'est un tableau
    
    header('location:acceuil.php');                       // redirection
} else {
    header("location:connexion.php");              
}

?>