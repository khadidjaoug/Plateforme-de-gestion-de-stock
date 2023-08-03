<?php
include('model/database.php');
include('model/vente.php');

$vente_id = $_POST["vente_id"];
$vente_date = $_POST["vente_date"];
$client_id = $_POST["client_id"];
$user_id = $_POST["user_id"];


$db = db_connect();
vente_update($db,$vente_id, $vente_date, $client_id, $user_id);


header("location:vente_list.php");
