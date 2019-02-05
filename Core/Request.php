<?php
namespace Core;
class Request {
    private $request;
    public function __construct()
    {
        foreach ($_REQUEST as $key => $value) {
            $_REQUEST = trim(stripcslashes(htmlspecialchars($value)));
            $this->request = $_REQUEST;
        }
    }

    public function GetRequest() {
     return  $this->request = $_REQUEST;
    }
}