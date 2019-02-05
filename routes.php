<?php

use Core\Router;

Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/src/View/User', ['controller' => 'app', 'action' => 'theme']);
Router::connect('/', ['controller' => 'user', 'action' => 'index']);
Router::connect('/show', ['controller' => 'user', 'action' => 'show']);
Router::connect('/film', ['controller' => 'user', 'action' => 'film']);

?> 