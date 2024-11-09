<?php
require_once"connexion.php";

$cnx = getcnx();
// $sql = "SELECT * FROM vehicule ORDER BY id DESC";
$sql = "SELECT * FROM  etudiants ORDER BY id DESC";

$query = $cnx->prepare($sql);

$query->execute();

$donnees=$query->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GESTION_ETUDIANTS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo">Gestion_Etudiants</div>
    </div>
    <div class="main-content">
        <header>
            <h1>Gestion_Etudiants</h1>
        </header>
        <section class="book-actions">
            <a class="btn-add" href="ajoute.php">Ajouter un etudiant</a>
            <input type="text" id="search" placeholder="Rechercher d'un etudiant...">
        </section>
        <section class="book-list">
            <table>
                <thead>     
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                    <?php foreach ($donnees as $donnee): ?>
                        <tr>
                        <td><?= $donnee['id']?> </td>
                        <td><?= $donnee['Nom']?> </td>
                        <td><?= $donnee['Prenom']?> </td>
                        <td><?= $donnee['Email']?> </td>
                        <td><?= $donnee['Date']?> </td>
                        <td>
                        <a class="btn-edit" href="modifier.php?id=<?= $donnee['id']?>">Modifier</a>
                        <a class="btn-delete" href="supprimer.php?id=<?= $donnee['id']?>">supprimer</a>
                        </td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>