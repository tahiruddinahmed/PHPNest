<?php 

class Router {
    private array $routes = [];

    public function add(string $path, array $params): void {
        $this->routes[] = [
            "path" => $path,
            "params" => $params
        ];
    }

    public function route(string $path): void {
        foreach($this->routes as $route) {
            if($route['path'] === $path) {
                $params = $route['params'];
                $controller = $params['controller'];
                $action = $params['action'];
                require "src/Controllers/{$controller}.php";

                $controllerObj = new $controller;
                $controllerObj->$action();
            }
            http_response_code(404);
            exit("Page Not Found 404");
        }

    }
}