<?php
include('model/database.php');
include('model/role.php');

$role_id = $_POST["role_id"];
$role_nom = $_POST["role_nom"];

$db = db_connect();
role_update($db, $role_id, $role_nom);


header("location:role_list.php");



