<?php

 include("model/database.php");
 include("model/user.php");

 $user_id = $_GET['id'];
 
 $db = db_connect();
 $user = user_get_one($db,$user_id);

?>

<?php
 include('model/role.php');
 
 
 $roles = role_get_all($db);


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
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Modification de l'utilisateur</span></strong></div>
                                    <div class="card-body">

                                        <form method="post" action="user_update_save.php" >
                                        
                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_id" value="<?php echo $user["user_id"]?>" hidden>
                                                <label for="user_id"></label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_nom" value="<?php echo $user["user_nom"]?>">
                                                <label for="user_nom">Nom</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_prenom" value="<?php echo $user["user_prenom"]?>">
                                                <label for="user_prenom">Prénom</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" name="role_id">
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
                                                <input class="form-control" type="text" name="user_email" value="<?php echo $user["user_email"]?>">
                                                <label for="user_email">Email</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="user_username" value="<?php echo $user["user_username"]?>">
                                                <label for="user_username">Nom d'utilisateur</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" name="user_mdp" value="<?php echo $user["user_mdp"]?>">
                                                <label for="user_mdp">Mot de passe</label>
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




 