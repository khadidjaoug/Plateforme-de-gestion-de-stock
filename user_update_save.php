<?php
include('model/database.php');
include('model/user.php');

$user_id = $_POST["user_id"];
$user_nom = $_POST["user_nom"];
$user_prenom = $_POST["user_prenom"];
$user_username = $_POST["user_username"];
$user_mdp = $_POST["user_mdp"];
$user_email = $_POST["user_email"];
$role_id = $_POST["role_id"];


$db = db_connect();
user_update($db,$user_id, $user_nom, $user_prenom, $user_username, $user_mdp, $user_email, $role_id);


header("location:user_list.php");
