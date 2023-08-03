<?php
$prod_id = $_GET['id'];   
$commande_id = $_GET['id'];   
   
include('model/database.php');
include('model/produit.php');
include('model/commande_produit.php');

$db = db_connect();
$produit = produit_get_one($db,$prod_id);
$commandeProduit = commande_produit_get_one($db,$commande_id,$prod_id);

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
                                        <h4 class="card-title">Effectuer nouvelle commande</h4></div>
                                    <div class="card-body">
                                       <form action="commande_add_save.php" method="post">

                                            <div class= "d-flex justify-content-between mb-3">
                                                <div>
                                                    <input class="btn btn-primary btn-block" type="submit" value="Ajouter"></input>
                                                    <input class="btn btn-warning btn-block" type="submit" value="Listes des commandes"></input>
                                                </div>
                                            </div>

                                          <div>
                                               <div class="form-floating mb-3 ">
                                                    <input class="form-control" type="date" name="commande_date" >
                                                    <label for="commande_date">Date de commande</label>
                                                </div>
                                          </div>

                                     <div class="row d-flex justify-content-between">
                                        <div class="col-6">

                                           <h6>Informations fournisseur</h6>
                                         
                                                <div class="form-floating mb-3 ">
                                                    <input class="form-control" type="text" name="fournisseur_nom">
                                                    <label for="fournisseur_nom">Nom fournisseur</label>
                                                </div>
                                            

												<div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="fournisseur_prenom">
                                                    <label for="fournisseur_prenom">Prénom fournisseur</label>
                                                </div>
                                          
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="number" name="fournisseur_telephone">
                                                    <label for="fournisseur_telephone">Téléphone</label>
                                                </div>

												<div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="fournisseur_adresse">
                                                    <label for="fournisseur_adresse">Adresse fournisseur</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="fournisseur_email">
                                                    <label for="fournisseur_email">Email fournisseur</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="user_username">
                                                    <label for="user_username">Utilisateur</label>
                                                </div>
                                           </div>
                                     </form>

                                            <div class="col-6">
												<h6>Détails produit</h6>
                                                
                                                <div class="form-floating mb-3 ">
                                                   <input class="form-control" type="text" name="prod_id" value="<?php echo $produit["prod_id"] ?>" hidden>
                                                   <label for="prod_id"></label>
                                                </div>
                                                 
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

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="number" name="commande_qt">
                                                    <label for="commande_qt">Quantité</label>
                                                </div>
									</div>
                                       
                        </div>

                                </div>
                            </div>
                        </div>
                                  
                       
                    </div>
                </main>
               


  <?php include('layout/footer.php');?>

