<?php

require_once"connexion.php";
require_once"model/Ajouter.php";
require_once"controllers/insert.php";

$message = "";
 
if(isset($_POST["ajouter"])){

$nom = htmlspecialchars($_POST['Nom']);
$prenom = htmlspecialchars($_POST['Prenom']);
$email = htmlspecialchars($_POST['Email']);

if(empty($nom) || empty($prenom)|| empty($email)){
 

     $message = "veuillez rempli tout les champs";
}
       
     $controllers = new \controllers\insert();
     $controllers->ajoute();
  
    $message="Etudiants inserer avec succees";

        
    
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Ajouter d'un etudiant</h2>
            <form action="" method="POST">

            <br><br>
            <?=$message?>
                <label for="Nom">Nom</label>
                <input type="text" id="Nom" name="Nom">
                <label for="Prenom">Prenom</label>
                <input type="text" id="Prenom" name="Prenom">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email">
                <input type="submit" name= "ajouter" value="Valider">
                <a href="index.php">Retour</a>
            </form>
        </div>
    </div>

</body>
</html>