<?php
$prod_id = $_GET['id'];   
//$vente_id = $_GET['id'];   
   
include('model/database.php');
include('model/produit.php');
include('model/vente.php');
include('model/client.php');

include('model/vente_produit.php');


$db = db_connect();
$produit = produit_get_one($db,$prod_id);
$client = client_get_all($db);
$vente = vente_get_all($db);
//$vente = vente_get_one($db,$vente_id);
//$venteProduit = vente_produit_get_one($db,$vente_id,$prod_id);

?>

<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                         <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h4 class="card-title">Effectuer nouvelle vente</h4></div>
                                    <div class="card-body">
                                       <form action="vente_add_save.php" method="post">

                                            <div class= "d-flex justify-content-between mb-3">
                                                <div>
                                                    <input class="btn btn-primary btn-block" type="submit" value="Ajouter"></input>
                                                    <input class="btn btn-warning btn-block" type="submit" value="Listes des ventes"></input>
                                                </div>
                                            </div>

                                          <div>
                                               <div class="form-floating mb-3 ">
                                                    <input class="form-control" type="date" name="vente_date" >
                                                    <label for="vente_date">Date de vente</label>
                                                </div>
                                          </div>

                                     <div class="row d-flex justify-content-between">
                                        <div class="col-6">

                                           <h6>Informations client</h6>

                                                   <input class="form-control" type="text" name="prod_id" value="<?php echo $produit["prod_id"] ?>" hidden>
                                                   <input class="form-control" type="text" name="vente_id" value="<?php echo $vente["vente_id"] ?>" hidden>
                                                   <input class="form-control" type="text" name="client_id" value="<?php echo $client["client_id"] ?>" hidden>
                                      
                                                  
                                         
                                                <div class="form-floating mb-3 ">
                                                    <input class="form-control" type="text" name="client_nom">
                                                    <label for="client_nom">Nom client</label>
                                                </div>
                                            

												<div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="client_prenom">
                                                    <label for="client_prenom">Prénom client</label>
                                                </div>
                                          
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="number" name="client_telephone">
                                                    <label for="client_telephone">Téléphone</label>
                                                </div>

												<div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="client_adresse">
                                                    <label for="client_adresse">Adresse client</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="client_email">
                                                    <label for="client_email">Email client</label>
                                                </div>
                                                
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="number" name="vente_qt" v>
                                                    <label for="vente_qt">Quantite</label>
                                                </div>
                                            
                                           </div>
                                     </form>

                                            <div class="col-6">
												<h6>Détails produit</h6>
                                                
                                               
												<div class="form-floating mb-3 ">
                                                    <input class="form-control" type="text" name="prod_nom" value="<?php echo $produit["prod_nom"] ?>" >
                                                    <label for="prod_nom">Produit</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="prod_design" value="<?php echo $produit["prod_design"] ?>">
                                                    <label for="prod_design">Désignation</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="number" name="prod_prix" value="<?php echo $produit["prod_prix"] ?>">
                                                    <label for="prod_prix">Prix</label>
                                                </div>

                                               

									</div>
                                       
                        </div>

                                </div>
                            </div>
                        </div>
                                  
                       
                    </div>
                </main>
               


  <?php include('layout/footer.php');?>

