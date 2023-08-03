<?php
//tester la fonction db_connect
//etape 1: inclure le fichier databse.php

include('model/database.php');
include('model/user.php');
//include('./model/categorie.php');
//include('./model/produit.php');
//include('model/user.php');
//include('./model/role.php');
//include('./model/client.php');
//include('model/fournisseur.php');
include('model/vente.php');
//include('model/vente_produit.php');

//etape 2: executer la fonction
$db = db_connect();


//$connect = checkUser($db, 'admin', '1234');
//var_dump($connect);


//categorie_add($db,'disk');
//categorie_update($db,2,'cat3');
//categorie_delete($db,11);


//$prod_id = 3;
//$vente_id = 3;
//$prod_id = 14;
//produit_add($db,'fffff','impdisig',3,5000,6000,3);
//produit_update($db,2,'newww','desiiign',4,2500,4000,1);
//produit_delete($db, 5);


//user_add($db,'khadidja', 'oug', 'dadou', 'mu13878', 'dadou@gmail.com', 1);
//user_update($db,1,'abdou', 'oug', 'abd', 'mu13878', 'dadou@gmail.com', 1);
//user_delete($db,3);

//role_add($db,'admin');
//role_update($db,2,'user');
//role_delete($db,1);
//client_add($db,'client1123', 'prenom123', '0637352728', '08hydraakger', 'ougamailcmom', 2);
//fournisseur_add($db,'fourn2', 'prenomfourn2', '0637352728', '08hydraalger', 'ougamailcmom', 9);
//client_update($db,1,'client12', 'prenom12', '0637352728', '08hydraakger', 'ougamailcmom', 1);
//client_delete($db,18);
//vente_add($db,$vente_date, $client_id, $user_id)
vente_add($db,'2023/08/08', '2', 11);
//vente_produit_add($db,3, 14, 20);
//vente_produit_add($db,3,14, 80);
//vente_produit_get_one($db,3,14);
//vente_update($db,3,'1999/05/04', '11111111', 2, 7);
//vente_delete($db,4);

//$categories = categorie_get_all($db);
//$produits = produit_get_all($db);
//$produit = produit_get_one($db,$prod_id);
//$roles = role_get_all($db);
//$users = user_get_all($db);
//$clients = client_get_all($db);
//$fournisseurs = fournisseur_get_all($db);
$ventes = vente_get_all($db);
//$vente = vente_get_one($db,3);
//$ventesProduits = vente_produit_get_all($db);
//$venteProduit= vente_produit_get_one($db,$vente_id,$prod_id);


//var_dump($categories);
//var_dump($produits);
//var_dump($produit);
//var_dump($roles);
//var_dump($users);
//var_dump($clients);
//var_dump($fournisseurs);
var_dump($ventes);
//var_dump($vente);
//var_dump($ventesProduits);
//var_dump($venteProduit);


