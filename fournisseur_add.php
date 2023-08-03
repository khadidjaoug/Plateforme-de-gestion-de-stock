<?php

// RECUPERATION DES DONNEES
include('model/database.php');
include('model/user.php');

$db = db_connect();
$users = user_get_all($db);

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
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Ajout d'un nouveau fournisseur</span></strong></div>
                                    <div class="card-body">

                                        <form method="post" action="fournisseur_add_save.php" >

                                        <div class="form-group">
                                        <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="fournisseur_nom" >
                                                        <label for="fournisseur_nom">Nom fournisseur</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="fournisseur_prenom" >
                                                        <label for="fournisseur_prenom">Prénom fournisseur</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control"  type="number" name="fournisseur_telephone" >
                                                        <label for="fournisseur_telephone">Téléphone</label>
                                                    </div>
                                                </div>
                                            
                                            
                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="fournisseur_adresse" >
                                                <label for="fournisseur_adresse">Adresse</label>
                                            </div>
                                        </div>
                                           

                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="fournisseur_email" >
                                                <label for="fournisseur_email">Email</label>
                                            </div>
                                        </div>
                                           

 
                                        <div class="form-group">
                                            <div class="row mb-3">
                                                 <div class="col-md-6">
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"> <input class="btn btn-warning btn-block" type="submit" value="Liste des fournisseurs"></input></div>
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




 