<?php
include('model/database.php');
include('model/vente_produit.php');


$vente_qt = $_POST["vente_qt"];



$db = db_connect();
vente_produit_add($db,$vente_id,$prod_id,$vente_qt);


header("location:vente_produit_list.php");
