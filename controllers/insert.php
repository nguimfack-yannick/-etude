<?php
namespace controllers;

require_once"connexion.php";

class insert{

    public function ajoute(){

        $model = new \model\Ajoute_V();
        $model->voiture();        

    }
}