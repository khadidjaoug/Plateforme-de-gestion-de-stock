<?php
include('model/database.php');
include('model/fournisseur.php');

//les etapes de suppression

$db = db_connect();

$fournisseur_id = $_GET["id"];

fournisseur_delete($db,$fournisseur_id);

header("location:fournisseur_list.php");