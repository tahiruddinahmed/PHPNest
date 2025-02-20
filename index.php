<?php 

require 'helpers.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Router.php';

$router = new Router;

$router->add("/home/index", ['controller' => 'HomeController', "action" => 'index']);
$router->add("/products", ['controller' => 'ProductsController', "action" => 'index']);
$router->add("/", ['controller' => 'HomeController', "action" => 'index']);

$params = $router->route($path);

