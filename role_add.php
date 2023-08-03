
<?php include('layout/nav.php');?>
<?php include('layout/header.php');?>
    
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card shadow-lg border-1 rounded-lg mt-5">

                                    <div class="card-header">
                                    <strong><span class="glyphicon glyphicon-th"></span><span>Ajouter un Nouveau role</span></strong></div>

                                    <div class="card-body">
                                        <form method="post" action="role_add_save.php" >

                                              <div class="form-group">
                                                 <div class="row mb-3">
                                                   <div class="col-md-12">
                                                        <label for="role_nom"></label> 
                                                        <input type="text" class="form-control" name="role_nom" placeholder="Role">  
                                                    </div> 
                                                  </div>  
                                             </div>
                                       
                                             <div class="form-group">
                                            <div class="row mb-3">
                                                 <div class="col-md-6">
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"> <input class="btn btn-warning btn-block" type="submit" value="Liste des roles"></input></div>
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




  