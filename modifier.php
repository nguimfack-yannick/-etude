 <?php

require_once"connexion.php";
require_once"model/Modifier.php";
require_once"controllers/modi.php";

$message ="";

if(isset($_GET['id'])){
  $cnx = getcnx();
    $id =$_GET['id'];
    $sql = "SELECT * FROM etudiants WHERE id= ?";
    $req =  $cnx->prepare($sql);
    $req->execute([$id]);
    $donnees=$req->fetchAll();

}
if(isset($_POST["modifier"])){

   $controllers = new \controllers\Up();
   $controllers-> update();
   


    $message="etudiant modifier avec succes";

    }
   


?>

<!DOCTYPE html>
<html lang= "fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de gestion d'etudiant</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>  
<form method="POST">
<?= $message ?>
              <?php foreach($donnees as $donnee): ?>
                <label for="Nom">Nom</label>
                <input type="text" id="Nom" name="Nom" value="<?=$donnee['Nom'] ;?>"><br><br>
                <label for="Prenom">Prenom</label>
                <input type="text" id="Prenom" name="Prenom" value="<?=$donnee['Prenom'] ;?>"><br><br>
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email"value="<?=$donnee['Email'] ;?>"><br><br>
  <input type="submit" name="modifier" value="Modifier">
  <a href="index.php">Retour</a>
  <?php endforeach; ?>
</form>
</body>
</html>