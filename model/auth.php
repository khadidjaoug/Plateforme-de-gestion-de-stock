<?php
  if(!isset($_SESSION["username"])) {     //pour acceder aux pages si l'utilisateur n'est pas connecter la page sera inaccessible
    header("location:connexion.php");
  }
?>