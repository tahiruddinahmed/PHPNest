<?php 

class  ProductsController {
    private $model;

    public function __construct()
    {
        require 'src/Models.php/Product.php';
        $this->model = new Product();
    }

    public function index() {
        $persons = $this->model->getData();

        require 'View.php';
    }
}