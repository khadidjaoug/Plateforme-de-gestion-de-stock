<?php
include('model/database.php');
include('model/categorie.php');

$cat_id = $_POST["cat_id"];
$cat_libelle = $_POST["cat_libelle"];

$db = db_connect();
categorie_update($db, $cat_id, $cat_libelle);


header("location:categorie_list.php");



