<?php

 include("model/database.php");
 include("model/categorie.php");

 $cat_id = $_GET["id"];
 

 $db = db_connect();
 $categorie = categorie_get_one($db,$cat_id);

  //var_dump($categorie);

?>
<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

                                    <div class="card-header">
                                    <strong><span class="glyphicon glyphicon-th"></span><span>Modifier une Catégorie</span></strong></div>

                                    <div class="card-body">
                                        <form method="post" action="categorie_update_save.php" >

                                              <div class="form-group">
                                                 <div class="row mb-3">
                                                    <input type="text" class="form-control" name="cat_id" placeholder="Catégorie" value="<?php echo $categorie["cat_id"]?>" hidden>  
                                                    <input type="text" class="form-control" name="cat_libelle" placeholder="Catégorie" value="<?php echo $categorie["cat_libelle"]?>">  
                                                  </div>   
                                             </div>
                                       
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <input class="btn btn-primary btn-block" type="submit" value="Modifier"></input>
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




  