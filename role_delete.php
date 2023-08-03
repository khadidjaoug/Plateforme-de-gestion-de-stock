<?php
include('model/database.php');
include('model/role.php');

//les etapes de suppression

$db = db_connect();

$role_id = $_GET["id"];

role_delete($db,$role_id);

header("location:role_list.php");