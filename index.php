<?php 

require 'helpers.php';
require 'src/Controllers/ProductsController.php';

$controller = new ProductsController;

$controller->index();