<?php

 include("model/database.php");
 include("model/client.php");

 $client_id = $_GET['id'];
 
 $db = db_connect();
 $client = client_get_one($db,$client_id);

  //var_dump($client);
?>

<?php
 include('model/user.php');
 
 $users = user_get_all($db);
 

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
                                    <strong> <span class="glyphicon glyphicon-th"></span><span>Modification du client</span></strong></div>
                                    <div class="card-body">

                                        <form method="post" action="client_update_save.php" >

                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="client_id" value="<?php echo $client["client_id"]?>" hidden>
                                                <label for="client_id"></label>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                        <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="client_nom" value="<?php echo $client["client_nom"]?>">
                                                        <label for="client_nom">Nom client</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control"  type="text" name="client_prenom" value="<?php echo $client["client_prenom"]?>">
                                                        <label for="client_prenom">Prénom client</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                    <div class="form-floating mb-3 ">
                                                        <input class="form-control"  type="number" name="client_telephone" value="<?php echo $client["client_telephone"]?>">
                                                        <label for="client_telephone">Téléphone</label>
                                                    </div>
                                                </div>
                                            
                                            
                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="client_adresse" value="<?php echo $client["client_adresse"]?>">
                                                <label for="client_adresse">Adresse</label>
                                            </div>
                                        </div>
                                           

                                        <div class="form-group">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="client_email" value="<?php echo $client["client_email"]?>">
                                                <label for="client_email">Email</label>
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




 