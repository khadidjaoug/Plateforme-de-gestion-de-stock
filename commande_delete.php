<?php
include('model/database.php');
include('model/commande.php');

//les etapes de suppression

$db = db_connect();

$commande_id = $_GET["id"];

commande_delete($db,$commande_id);

header("location:commande_list.php");