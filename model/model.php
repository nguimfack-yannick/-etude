<?php

namespace model;

require_once"connexion.php";

class Model{

    protected $cnx;

    public function __construct()
    {
        $this->cnx =getcnx();
    }
}