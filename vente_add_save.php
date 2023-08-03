<?php
  include('model/database.php');
  include('model/vente.php');
  include('model/vente_produit.php');
  include('model/client.php');
  
     $prod_id = $_POST['prod_id'];
     //$vente_id = $_POST['vente_id'];

     $client_nom = $_POST['client_nom'];
     $client_prenom = $_POST['client_prenom'];
     $client_telephone = $_POST['client_telephone'];
     $client_adresse = $_POST['client_adresse'];
     $client_email = $_POST['client_email'];
    
     //$vente_date = $_POST['$vente_date'];
     $vente_date = date('Y-m-d H:i:s');
     $vente_qt = $_POST['$vente_qt'];
  

     $db = db_connect();
     client_add($db,$client_nom, $client_prenom, $client_telephone, $client_adresse, $client_email);
                                                    
     vente_add($db,$vente_date, $client_id);

     vente_produit_add($db,$vente_id,$prod_id,$vente_qt);
   
     //header("location:vente_list.php");
?>
