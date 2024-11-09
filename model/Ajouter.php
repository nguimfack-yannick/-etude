<?php
namespace model;

require_once"connexion.php";
require_once"model/model.php";

class Ajoute_V extends Model{

    function voiture(){
    
$nom = htmlspecialchars($_POST['Nom']);
$prenom = htmlspecialchars($_POST['Prenom']);
$email = htmlspecialchars($_POST['Email']);
    
    $sql ="INSERT INTO etudiants(Nom,Prenom,Email) VALUE(?,?,?)";

    $requet= $this->cnx->prepare($sql);

    $requet->execute([$nom,$prenom,$email]);

    }
}