<?php
namespace controllers;
require_once"connexion.php";

class up{
    public function update(){
        $model = new \model\Update_V();
        $model->modi();
    }
}