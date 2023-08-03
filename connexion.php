
<?php include('layout/header.php');?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Authentification</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="connexion_traitement.php">
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUtilisateur" type="text" name="username" placeholder="Nom d'utilisateur" >
                                                <label for="username">Nom d'utilisateur</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="mdp" placeholder="Mot de passe" >
                                                <label for="mdp">Mot de passe</label>
                                            </div>
                                           
                                            <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <input class="btn btn-primary" type="submit" value="S'authentifier">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php include('layout/footer.php');?>