<?php
$prod_id = $_GET['id'];   
$vente_id = $_GET['id'];   
  
include('model/database.php');
include('model/produit.php');
include('model/vente_produit.php');

$db = db_connect();
$produit = produit_get_one($db,$prod_id);
$venteProduit = vente_produit_get_one($db,$vente_id,$prod_id);

?>

<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                         <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4 class="card-title">Vente produit</h4>
                                     
                                    </div>
                                        
                                    <div class="card-body">            
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

                                         <form action="vente_add.php" method="post">
                                            
                                                 <div>
                                                    <div class="form-floating mb-3 ">
                                                         <input class="form-control" type="number" name="vente_qt">
                                                         <label for="vente_qt">Quantité</label>
                                                    </div>
                                                 </div>

                                                 <div class= "d-flex justify-content-between mb-3">
                                                    <div class="form-button-action">
                                                        <a href="vente_produit_list.php?id=<?php echo $produit['prod_id'] ?>" class="btn btn-success">Finaliser la vente</a>
                                                        <input class="btn btn-warning btn-block" type="submit" value="Listes ventes produits"></input>
                                                    </div>
                                                </div>
                                       </form>
                                       
                        </div>

                                </div>
                            </div>
                        </div>
                                  
                       
                    </div>
                </main>
               


  <?php include('layout/footer.php');?>

