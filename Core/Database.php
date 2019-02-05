<?php
namespace  Core;
use \PDO;
class Database {
    private $bdd;

    public function __construct()
    {
        $user = 'root';
        $pass = 'root';
        $dbh = new \PDO('mysql:host=localhost;dbname=epitech_tp',$user, $pass);
        $this->bdd = $dbh;

    }
    public function dbb() {
        return $this->bdd;
    }
}