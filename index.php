<?php
$database = require 'core/bootstrap.php';
//$router = new Router;
//require 'routes.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
//var_dump($router->direct($uri));
//require $router->direct($uri);
require Router::load('routes.php')
    ->direct(Request::uri());