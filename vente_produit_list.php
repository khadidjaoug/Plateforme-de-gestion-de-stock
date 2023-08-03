<?php

// RECUPERATION DES DONNEES
    include('model/database.php');
    include('model/vente_produit.php');
    include('model/produit.php');
    
    $db = db_connect();
    $ventesProduits = vente_produit_get_all($db);
    $produits = produit_get_all($db);
    
?>

<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
<div id="layoutSidenav_content">
     <main>
        <div class="container-fluid px-4">
             <h2 class="mt-4">ventes des produits</h2>   
                <div class="card mb-4">
                   <div class="card-header d-flex justify-content-between">
                      <h4 class="card-title">Gestion des ventes des produits</h4>
                      <a href="vente_add.php" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i>Ajouter une vente de produit</a>            
                    </div>
                
                    <div class="card-body">
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <!--<div class="datatable-top">
                                  <div class="datatable-dropdown">
                                     <label>
                                       <select class="datatable-selector">
                                             <option value="5">5</option>
                                             <option value="10" selected="">10</option>
                                             <option value="15">15</option>
                                             <option value="20">20</option>
                                             <option value="25">25</option>
                                       </select> entries per page
                                    </label>
                                 </div>
                               <div class="datatable-search">
                                   <input class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="datatablesSimple">
                              </div>
                           </div>-->

             <div class="datatable-container">
                    <table id="datatablesSimple" class="datatable-table">
                       <thead>
                         <tr>
                  
                           <th data-sortable="true" style="width: 18.297786720321934%;"><a href="#" class="datatable-sorter">Produit</a></th>
                           <th data-sortable="true" style="width: 18.297786720321934%;"><a href="#" class="datatable-sorter">Prix</a></th>
                           <th data-sortable="true" style="width: 18.297786720321934%;"><a href="#" class="datatable-sorter">Désignation</a></th>
                           <th data-sortable="true" style="width: 8.297786720321934%;"><a href="#" class="datatable-sorter">Quantité vendu</a></th>
                           <th data-sortable="true" style="width: 12.706237424547282%;"><a href="#" class="datatable-sorter">Action</a></th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php foreach($ventesProduits as $venteProduit) {?>
                         <?php foreach($produits as $produit) {?>
                               <tr>
                                 
                                  <td><?php echo $produits['prod_nom'] ?></td>
                                  <td><?php echo $produits['prod_prix'] ?></td>
                                  <td><?php echo $produits['prod_design'] ?></td>
                                  <td><?php echo $venteProduit['vente_qt'] ?></td>
                                  <td>
                                      <div class="form-button-action">                                   
                                         <a href="vente_produit_update.php?id=<?php echo $vente_produit['vente_id'] ?>" class="btn btn-link btn-success btn-lg"><i class="fa fa-edit"></i></a>
                                         <a href="vente_produit_delete.php?id=<?php echo $vente_produit['vente_id'] ?>" class="btn btn-link btn-danger"><i class="fa fa-times"></i> </a>                           
                                      </div>
                                 </td>
                              </tr>
                        <?php } ?>     
                        <?php } ?>     
                      </tbody>
                 </table>
            </div>
<!--<div class="datatable-bottom">
    <div class="datatable-info">Showing 1 to 10 of 57 entries</div>
    <nav class="datatable-pagination"><ul class="datatable-pagination-list"><li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><a data-page="1" class="datatable-pagination-list-item-link">‹</a></li><li class="datatable-pagination-list-item datatable-active"><a data-page="1" class="datatable-pagination-list-item-link">1</a></li><li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">2</a></li><li class="datatable-pagination-list-item"><a data-page="3" class="datatable-pagination-list-item-link">3</a></li><li class="datatable-pagination-list-item"><a data-page="4" class="datatable-pagination-list-item-link">4</a></li><li class="datatable-pagination-list-item"><a data-page="5" class="datatable-pagination-list-item-link">5</a></li><li class="datatable-pagination-list-item"><a data-page="6" class="datatable-pagination-list-item-link">6</a></li><li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">›</a></li></ul></nav>
</div>-->
                              </div>
                            </div>
                        </div>
                    </div>
                </main>
               

  <?php include('layout/footer.php');?>




  