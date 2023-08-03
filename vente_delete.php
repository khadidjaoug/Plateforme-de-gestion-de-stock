<?php
include('model/database.php');
include('model/vente.php');

//les etapes de suppression

$db = db_connect();

$vente_id = $_GET["id"];

vente_delete($db,$vente_id);

header("location:vente_list.php");