<?php 

class Controller {
    private $model;

    public function __construct()
    {
        require 'Model.php';
        $this->model = new Model();
    }

    public function index() {
        $persons = $this->model->getData();

        require 'View.php';
    }
}