<?php

 include("model/database.php");
 include("model/fournisseur.php");

 $fournisseur_id = $_GET['id'];
 
 $db = db_connect();
 $fournisseur = fournisseur_get_one($db,$fournisseur_id);

  //var_dump($fournisseur);
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
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Modification du fournisseur</span></strong></div>
                                    <div class="card-body">

                                        <form method="post" action="fournisseur_update_save.php" >

                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="fournisseur_id" value="<?php echo $fournisseur["fournisseur_id"]?>" hidden>
                                                <label for="fournisseur_id"></label>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                        <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="fournisseur_nom" value="<?php echo $fournisseur["fournisseur_nom"]?>">
                                                        <label for="fournisseur_nom">Nom fournisseur</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="fournisseur_prenom" value="<?php echo $fournisseur["fournisseur_prenom"]?>">
                                                        <label for="fournisseur_prenom">Prénom fournisseur</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                    <div class="form-floating mb-3 ">
                                                        <input class="form-control"  type="number" name="fournisseur_telephone" value="<?php echo $fournisseur["fournisseur_telephone"]?>">
                                                        <label for="fournisseur_telephone">Téléphone</label>
                                                    </div>
                                                </div>
                                           
                                            
                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="fournisseur_adresse" value="<?php echo $fournisseur["fournisseur_adresse"]?>">
                                                <label for="fournisseur_adresse">Adresse</label>
                                            </div>
                                        </div>
                                           

                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="fournisseur_email" value="<?php echo $fournisseur["fournisseur_email"]?>">
                                                <label for="fournisseur_email">Email</label>
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




 