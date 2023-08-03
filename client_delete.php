<?php
include('model/database.php');
include('model/client.php');

//les etapes de suppression

$db = db_connect();

$client_id = $_GET["id"];

client_delete($db,$client_id);

header("location:client_list.php");