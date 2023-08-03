<?php
include('model/database.php');
include('model/categorie.php');

$cat_libelle = $_POST["cat_libelle"];

$db = db_connect();
categorie_add($db,$cat_libelle);


header("location:categorie_list.php");

if(isset($cat_libelle['cat_libelle'])){
    echo $cat_libelle['cat_libelle'];
}
else{
    echo "La valeur n'existe pas";
}


