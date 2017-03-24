<?php

class Router {

    public $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file) {
        $router = new static;

        require $file;

        return $router;
    }

    public function direct($uri, $requestType) {
        if (array_key_exists($uri, $this->routes[$requestType])) {

            $parsed = explode('@', $this->routes[$requestType][$uri]);

            return $this->callAction(
                            $parsed[0], $parsed[1]
            );
        }

        throw new Exception("No route defined for this URI. ");
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    protected function callAction($controller, $action) {

        include "controllers/{$controller}.php";

        $controller = new $controller;

        if (!method_exists($controller, $action)) {

            throw new Exception(
            "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }

}
