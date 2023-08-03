<?php
include('model/database.php');
include('model/produit.php');

$prod_nom = $_POST["prod_nom"];
$prod_design = $_POST["prod_design"];
$prod_qt = $_POST["prod_qt"];
$prod_prix = $_POST["prod_prix"];
$cat_id = $_POST["cat_id"];


$db = db_connect();
produit_add($db,$prod_nom, $prod_design, $prod_qt, $prod_prix, $cat_id);


header("location:produit_list.php");
