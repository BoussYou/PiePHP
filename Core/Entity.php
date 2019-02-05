<?php
namespace Core;
use Core\ORM;
class Entity
{
    private $orm;
    private $table;
    private $titre;
    private $fields;
    private $request;

    public function __construct($table = "film", $titre = "titre")
    {
        $this->orm = new ORM();
        $this->table = $table;
        $this->titre = $titre;
        $this->request = new Request();
        $this->request = $this->request->GetRequest();
    }

    public function createEntity()
    {
        $this->orm->create($this->table, $_POST);
    }

    public function logEntity()
    {
        $this->orm->log($this->table, $_POST);
    }
    public function filmEntity()
    {
        $this->orm->film($this->table, $this->titre);
    }
}