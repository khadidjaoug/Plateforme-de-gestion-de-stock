<?php session_start(); ?>
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Info Tech</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <?php if(isset($_SESSION["username"])) {?>

           <span class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                     <span><?php echo $_SESSION["username"]; ?> </span>
                           <a href="deconnexion.php">se déconnecter</a></span> <?php } else { ?>

           <span class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <span>usertest</span>
                  <a href="connexion.php">se connecter</a></span>
             <?php } ?>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <a class="nav-link" href="acceuil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Acceuil
                            </a>

                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUtilisateur" aria-expanded="false" aria-controls="collapseLayouts" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Utilisateur
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUtilisateur" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="user_list.php">Gestion des utilisateurs</a>
                                    <a class="nav-link" href="user_add.php">Ajouter un utilisateur</a>
                                </nav>
                            </div>


                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClient" aria-expanded="false" aria-controls="collapseLayouts" >
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Client
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseClient" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="client_list.php">Gestion des clients</a>
                                    <a class="nav-link" href="client_add.php">Ajouter un client</a>
                                </nav>
                            </div>


                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFournisseur" aria-expanded="false" aria-controls="collapseLayouts" >
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Fournisseur
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFournisseur" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="fournisseur_list.php">Gestion des fournisseurs</a>
                                    <a class="nav-link" href="fournisseur_add.php">Ajouter un fournisseur</a>
                                </nav>
                            </div>


                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCatégorie" aria-expanded="false" aria-controls="collapseLayouts" >
                                <div class="sb-nav-link-icon"><i class="fab fa-buromobelexperte"></i></div>
                                Catégorie
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCatégorie" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="categorie_list.php">Gestion des catégories</a>
                                    <a class="nav-link" href="categorie_add.php">Ajouter un catégorie</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduit" aria-expanded="false" aria-controls="collapseLayouts" >
                                <div class="sb-nav-link-icon"><i class="fab fa-microsoft"></i></div>
                                Produit
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseProduit" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="produit_list.php">Gestion des produits</a>
                                    <a class="nav-link" href="produit_add.php">Ajouter un produit</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAchatFournisseur" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Achat Fournisseur
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAchatFournisseur" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="commande_list.php">Liste des Commandes</a>
                                    
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVenteClient" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="far fa-plus-square"></i></div>
                                Vente Client
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseVenteClient" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="vente_list.php">Liste des Ventes</a>
                                 
                                </nav>
                            </div>

                          
                            
                </nav>
            </div>