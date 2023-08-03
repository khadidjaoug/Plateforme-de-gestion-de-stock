<?php
include('model/database.php');
include('model/user.php');

//les etapes de suppression

$db = db_connect();

$user_id = $_GET["id"];

user_delete($db,$user_id);

header("location:user_list.php");