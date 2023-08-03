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
             <h2 class="mt-4">Utilisateurs</h2>   
                <div class="card mb-4">
                   <div class="card-header d-flex justify-content-between">
                      <h4 class="card-title">Gestion des utilisateurs</h4>
                      <a href="user_add.php" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i>Ajouter un utilisateur</a>            
                    </div>
                
                    <div class="card-body">
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                           
             <div class="datatable-container">
                    <table id="datatablesSimple" class="datatable-table">
                       <thead>
                         <tr>
                           <th data-sortable="true" style="width: 7.102615694164992%;"><a href="#" class="datatable-sorter">Nom</a></th>
                           <th data-sortable="true" style="width: 7.321931589537222%;"><a href="#" class="datatable-sorter">Prénom</a></th>
                           <th data-sortable="true" style="width: 12.297786720321934%;"><a href="#" class="datatable-sorter">Email</a></th>
                           <th data-sortable="true" style="width: 10.87122736418511%;"><a href="#" class="datatable-sorter">Nom d'utilisateur</a></th>
                           <th data-sortable="true" style="width: 6.87122736418511%;"><a href="#" class="datatable-sorter">Role d'utilisateur</a></th>
                           <th data-sortable="true" style="width: 6.706237424547282%;"><a href="#" class="datatable-sorter">Action</a></th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php foreach($users as $user) {?>
                               <tr>
                                  <td><?php echo $user['user_nom'] ?></td>
                                  <td><?php echo $user['user_prenom'] ?></td>
                                  <td><?php echo $user['user_email'] ?></td>
                                  <td><?php echo $user['user_username'] ?></td>
                                  <td><?php echo $user['role_nom'] ?></td>
                                  <td>
                                      <div class="form-button-action">                                  
                                         <a href="user_update.php?id=<?php echo $user['user_id'] ?>" class="btn btn-link btn-success btn-lg"><i class="fa fa-edit"></i></a>
                                         <a href="user_delete.php?id=<?php echo $user['user_id'] ?>" class="btn btn-link btn-danger"><i class="fa fa-times"></i> </a>                           
                                      </div>
                                 </td>
                              </tr>
                        <?php } ?>     
                      </tbody>
                 </table>
            </div>

                              </div>
                            </div>
                        </div>
                    </div>
                </main>
               


  <?php include('layout/footer.php');?>




  