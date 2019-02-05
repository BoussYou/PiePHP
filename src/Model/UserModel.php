<?php

namespace Model;

use \Core\Database;


class UserModel
{
    private $email;
    private $password;

    public function __construct()
    {
        $this->database = new Database();
        $this->database = $this->database->connect();
    }

    public function create($email, $password)
    {

    }
}