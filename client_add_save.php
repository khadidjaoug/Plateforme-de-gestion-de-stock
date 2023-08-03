<?php
include('model/database.php');
include('model/client.php');

$client_nom = $_POST["client_nom"];
$client_prenom = $_POST["client_prenom"];
$client_telephone = $_POST["client_telephone"];
$client_adresse = $_POST["client_adresse"];
$client_email = $_POST["client_email"];


$db = db_connect();
client_add($db,$client_nom, $client_prenom, $client_telephone, $client_adresse, $client_email);


header("location:client_list.php");
