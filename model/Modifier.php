<?php

namespace model;

require_once"connexion.php";
require_once"model/model.php";


class Update_V extends model{

    public function modi(){

        

        $nom = htmlspecialchars($_POST['Nom']);
        $prenom = htmlspecialchars($_POST['Prenom']);
        $email = htmlspecialchars($_POST['Email']);
        $id =$_GET['id'];

        // $sql= "UPDATE vehicule SET model=?,nom=? WHERE id=?";
    $sql = "UPDATE etudiants SET nom=?,prenom=?,email=? WHERE id=?";
    $requet = $this->cnx->prepare($sql);
    $requet->execute([$nom,$prenom,$email,$id]);
    }
}