<?php

require_once"connexion.php";
require_once"model/supp.php";
require_once"controllers/supprime.php";
$message="";

if(isset($_GET["id"])){

$id = $_GET['id'];

$controllers = new \controllers\Supp();
 $req = $controllers->del();

if($req){
    $message = "etudiant supprimer avec succes";
}else{
    // $message = "aucun etudiant trouver avec cette id";
}
}





?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site d'enregistrement</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form>
 <?= $message?>
  <input type="submit"name="supprimer" value="Supprimer">

  <a class="btn-delete" href="index.php">Retour</a>
</form>
</body>
</html>