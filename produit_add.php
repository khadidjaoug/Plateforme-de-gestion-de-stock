<?php

// RECUPERATION DES DONNEES
include('model/database.php');
include('model/categorie.php');

$db = db_connect();
$categories = categorie_get_all($db);

?>

<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-1 rounded-lg mt-5">
                                    <div class="card-header">
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Ajout d'un nouveau produit</span></strong></div>
                                    <div class="card-body">

                                        <form method="post" action="produit_add_save.php" >

                                        <div class="form-group">
                                        <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="prod_nom" >
                                                        <label for="prod_nom">Nom Produit</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select class="form-control" name="cat_id">
                                                          <option value="">Séléctionner une Catégorie</option>
                                                          <?php  foreach ($categories as $categorie) {?>
                                                          <option value="<?php echo $categorie['cat_id'] ?>">
                                                          <?php echo $categorie['cat_libelle'] ?></option>
                                                         <?php }?>
                                                    </select>
                                                    <label for="cat_id">Catégorie</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="prod_design" >
                                                <label for="prod_design">Désignation</label>
                                            </div>
                                        </div>
                                           

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="number" name="prod_qt" >
                                                        <label for="prod_qt">Quantité</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="number" name="prod_prix" >
                                                        <label for="prod_prix">Prix</label>
                                                    </div>
                                                </div>

                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                 <div class="col-md-6">
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"> <input class="btn btn-warning btn-block" type="submit" value="Liste des produits"></input></div>
                                                    </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"> <input class="btn btn-primary btn-block" type="submit" value="Ajouter"></input></div>
                                                    </div>
                                                 </div>
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




 