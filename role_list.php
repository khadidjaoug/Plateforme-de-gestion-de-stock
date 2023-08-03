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
                        <h2 class="mt-4">Roles</h2>    
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between">
                               <h4 class="card-title">Gestion des Roles</h4>
                               <a href="role_add.php" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i>Ajouter un role</a>
                            </div>
                        
                            <div class="card-body">
                                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                    
                                <div class="col-md-6">
                                <div class="datatable-container">
                                <table id="datatablesSimple" class="datatable-table">
                                      <thead>
                                          <tr>
                                             <th data-sortable="true" style="width: 10.297786720321934%;"><a href="#" class="datatable-sorter">Role</a></th>
                                             <th data-sortable="true" style="width: 10.706237424547282%;"><a href="#" class="datatable-sorter">Action</a></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                    <?php foreach($roles as $role) { ?>
                                        <tr>
                                          <td><?php echo $role["role_nom"] ?></td>
                                          <td>
                                              <div class="form-button-action">
                                                <a href="role_update.php?id=<?php echo $role["role_id"] ?>" class="btn btn-link btn-success btn-lg">
                                                <i class="fa fa-edit"></i></a>
                                 
                                                <a href="role_delete.php?id=<?php echo $role["role_id"] ?>" class="btn btn-link btn-danger">
                                                <i class="fa fa-times"></i> </a>          
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
                    </div>
                </main>
               


  <?php include('layout/footer.php');?>




  