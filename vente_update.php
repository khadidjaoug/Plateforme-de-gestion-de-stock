<?php

 include("model/database.php");
 include("model/vente.php");

 $vente_id = $_GET['id'];
 
 $db = db_connect();
 $vente = vente_get_one($db,$vente_id);

?>

<?php
 include('model/client.php');
 include('model/user.php');
  
 $clients = client_get_all($db);
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
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Modification de l'utilisateur</span></strong></div>
                                    <div class="card-body">

                                        <form method="post" action="vente_update_save.php" >
                                        
                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="date" name="vente_id" value="<?php echo $vente["vente_id"]?>" hidden>
                                                <label for="vente_id"></label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="date" name="vente_date" value="<?php echo $vente["vente_date"]?>">
                                                <label for="vente_date">Date de vente</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="vente_reference" value="<?php echo $vente["vente_reference"]?>">
                                                <label for="vente_reference">Référence</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" name="client_id">
                                                          <?php  foreach ($clients as $client) {?>
                                                          <option value="<?php echo $client['client_id'] ?>">
                                                          <?php echo $client['client_nom'] ?></option>
                                                         <?php }?>
                                                    </select>
                                                    <label for="client_id">Client</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" name="user_id">
                                                          <?php  foreach ($users as $user) {?>
                                                          <option value="<?php echo $user['user_id'] ?>">
                                                          <?php echo $user['user_nom'] ?></option>
                                                         <?php }?>
                                                    </select>
                                                    <label for="user_id">Utilisateur</label>
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




 