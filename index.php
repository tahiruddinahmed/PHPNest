<?php 

require 'helpers.php';


$action = $_GET['action'] ?? '';
$controller = $_GET['controller'] ?? '';


if($controller === 'product') {

    require 'src/Controllers/ProductsController.php';
    $controllerObj = new ProductsController;

} elseif($controller === 'home') {

    require 'src/Controllers/HomeController.php';
    $controllerObj = new HomeController;
}


// print_die($action);
if($action === 'index') {
    $controllerObj->index();
} else if($action === 'show') {
    $controllerObj->show();
}
