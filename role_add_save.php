<?php
include('model/database.php');
include('model/role.php');

$role_nom = $_POST["role_nom"];

$db = db_connect();
role_add($db,$role_nom);


header("location:role_list.php");



