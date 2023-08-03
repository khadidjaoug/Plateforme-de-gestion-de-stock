<?php
include('model/database.php');
include('model/categorie.php');

//les etapes de suppression

$db = db_connect();

$cat_id = $_GET["id"];

categorie_delete($db,$cat_id);

header("location:categorie_list.php");