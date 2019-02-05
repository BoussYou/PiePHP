<?php

namespace Core;

class Core {
    public function run()
    {
        include('routes.php');
       // echo __CLASS__ . " [OK]" . PHP_EOL;
       //var_dump($_SERVER['REQUEST_URI']);
        $url = substr($_SERVER['REQUEST_URI'], strlen(BASE_URI));
        // var_dump($url);
        $url = Router::get($url);

        $controller = "Controller\\" . ucfirst($url["controller"]) . "Controller";
        $action = $url['action'] . "Action";
        $app = new $controller();
        $app->$action();

    }
}