<?php
namespace model;

  require_once"connexion.php";
  require_once"model/model.php";

class Delete extends model{

    public function supp(){
  
    $id = $_GET['id'];
    $sql = "DELETE FROM etudiants WHERE id=?";

$req=$this->cnx->prepare($sql);

$req->execute([$id]);
return $req;


    }
}