<?php 

namespace App\Controllers;

use App\Models\Product;

class  ProductsController {
    private $model;

    public function __construct()
    {
        // require 'src/Models.php/Product.php';
        $this->model = new Product();
    }

    public function index() {
        $persons = $this->model->getData();

        require 'Views/product.php';
    }

    public function show() {
        require 'Views/product-show.php';
    }
}