<?php
include('model/database.php');
include('model/produit.php');

//les etapes de suppression

$db = db_connect();

$prod_id = $_GET["id"];

produit_delete($db,$prod_id);

header("location:produit_list.php");