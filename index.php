<?php 

require 'helpers.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// require 'src/Router.php';
spl_autoload_register(function (string $className) {
    $path = "src/" . str_replace("\\", '/',$className) . ".php";

    if(!file_exists($path)) {
        die("Class not found: {$className}");
    }
    require $path;
});

use Framework\Router;

$router = new Router;
// $newObj = new Person;

$router->add("/home/index", ['controller' => 'HomeController', "action" => 'index']);
$router->add("/products", ['controller' => 'ProductsController', "action" => 'index']);
$router->add("/", ['controller' => 'HomeController', "action" => 'index']);

$params = $router->route($path);

