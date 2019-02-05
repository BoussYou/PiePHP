<?php
namespace Core;
use \Core\Database;
use \Core\Request;


class ORM {

    private $bdd;
    public function __construct()
    {
    $this->bdd = new Database();
    $this->bdd = $this->bdd->dbb();
    }
    public function create($table,$fields) {
        $key = implode(",", array_keys($fields));
        $value = implode("','" ,$fields);
        $val = $value;
    $sth = $this->bdd->prepare("INSERT INTO $table ($key) VALUES ('$val')");
    $sth->execute();
    return $this->bdd->lastInsertId();

    }
    public function read ($table, $id) {

        $stt = $this->bdd->prepare("SELECT * FROM $table WHERE id_user = $id");
        $stt->execute();
        $result = $stt->fetchAll();

    }
    public function update ($table, $id, $fields) {
        $valeur = "";
        foreach ($fields as $key => $value) {
           $valeur .= "$key = '$value',";
        }
       $valeur = rtrim($valeur, ",");

        $sti = $this->bdd->prepare("UPDATE $table SET  $valeur  WHERE id_user = $id");
        $sti = $this->execute();
        return true;
    }
    public function delete ($table, $id) {
        $stt = $this->bdd->prepare("DELETE FROM $table WHERE `id_user` = $id");
        $stt->execute();
    }



    public function log ($table, $req)
    {
        $valeur = "";
        foreach ($req as $key => $value) {

            $valeur .= " $key = '$value'" . " AND ";

        }

        $valeur = rtrim($valeur, "AND ");

        $sth = $this->bdd->prepare("SELECT * FROM $table WHERE $valeur");
        $sth->execute();
        $result = $sth->fetch();
        var_dump($sth);
        if (!empty($result)) {
            $this->session($result);
        }

    }
    public function film($table,$titre) {
        $stt = $this->bdd->prepare("SELECT $titre FROM $table");
        $stt->execute();
        echo "rdx";
        var_dump($stt);
        $result = $stt->fetchAll();
        var_dump($result);
    }
        public function session($id)
    {

        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['password'] = $id['password'];
        $_SESSION['email'] = $id['email'];
        header('Location:show');
    }
}