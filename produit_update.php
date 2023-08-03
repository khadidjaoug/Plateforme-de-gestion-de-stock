<?php

 include("model/database.php");
 include("model/produit.php");

 $prod_id = $_GET['id'];
 
 $db = db_connect();
 $produit = produit_get_one($db,$prod_id);

  //var_dump($produit);
?>

<?php
 include('model/categorie.php');
 
 $categories = categorie_get_all($db);
 

?>

<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Modification du produit</span></strong></div>
                                    <div class="card-body">

                                        <form method="post" action="produit_update_save.php" >

                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="prod_id" value="<?php echo $produit["prod_id"]?>" hidden>
                                                <label for="prod_id"></label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="text" name="prod_nom" value="<?php echo $produit["prod_nom"]?>" >
                                                        <label for="prod_nom">Nom Produit</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select class="form-control" name="cat_id">
                                                          <?php  foreach ($categories as $categorie) {?>
                                                          <option value="<?php echo $categorie['cat_id'] ?>"> <?php echo $categorie['cat_libelle'] ?></option>
                                                         <?php }?>
                                                    </select>
                                                    <label for="cat_id">Catégorie</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="prod_design" value="<?php echo $produit["prod_design"]?>"  >
                                                <label for="prod_design">Désignation</label>
                                            </div>
                                        </div>
                                           

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="number" name="prod_qt" value="<?php echo $produit["prod_qt"]?>" >
                                                        <label for="prod_qt">Quantité</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="number" name="prod_prix" value="<?php echo $produit["prod_prix"]?>"  >
                                                        <label for="prod_prix">Prix</label>
                                                    </div>
                                                </div>

                                             </div>
                                        </div>

                                       <div class="mt-4 mb-0">
                                            <div class="d-grid"> <input class="btn btn-primary btn-block" type="submit" value="Modifier"></input></div>
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               


  <?php include('layout/footer.php');?>




 