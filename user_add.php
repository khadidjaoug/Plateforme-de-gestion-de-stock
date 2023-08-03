<?php

// RECUPERATION DES DONNEES
include('model/database.php');
include('model/role.php');

$db = db_connect();
$roles = role_get_all($db);

?>

<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-1 rounded-lg ">
                                    <div class="card-header">
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Ajout d'un nouvel utilisateur</span></strong></div>
                                    <div class="card-body">
                                        <form method="post" action="user_add_save.php" >
                                            
                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_nom" >
                                                <label for="user_nom">Nom</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_prenom" >
                                                <label for="user_prenom">Prénom</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" name="role_id">
                                                          <option value=""></option>
                                                          <?php  foreach ($roles as $role) {?>
                                                          <option value="<?php echo $role['role_id'] ?>">
                                                          <?php echo $role['role_nom'] ?></option>
                                                         <?php }?>
                                                    </select>
                                                    <label for="role_id">role</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_email" >
                                                <label for="user_email">Email</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_username" >
                                                <label for="user_username">Nom d'utilisateur</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" name="user_mdp" >
                                                <label for="user_mdp">Mot de passe</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row mb-3">
                                                 <div class="col-md-6">
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"> <input class="btn btn-warning btn-block" type="submit" value="Liste des utilisateurs"></input></div>
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




 