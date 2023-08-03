<?php
include('model/database.php');
include('model/fournisseur.php');

$fournisseur_nom = $_POST["fournisseur_nom"];
$fournisseur_prenom = $_POST["fournisseur_prenom"];
$fournisseur_telephone = $_POST["fournisseur_telephone"];
$fournisseur_adresse = $_POST["fournisseur_adresse"];
$fournisseur_email = $_POST["fournisseur_email"];


$db = db_connect();
fournisseur_add($db,$fournisseur_nom, $fournisseur_prenom, $fournisseur_telephone, $fournisseur_adresse, $fournisseur_email);


header("location:fournisseur_list.php");
