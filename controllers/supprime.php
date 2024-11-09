<?php

namespace controllers;
require_once"connexion.php";
class Supp{

    public function del(){

    $model = new \model\Delete();
        $model->supp();

    }
}