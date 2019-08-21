<?php

namespace App\Core;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file)
    {
        $router = new self;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (! array_key_exists($uri, $this->routes[$requestType])) {
            throw new \Exception('There isn\'t any route for this URI.');
        }

        return $this->callMethod(
            ...explode('@', $this->routes[$requestType][$uri])
        );
    }

    public function callMethod($controllerName, $method)
    {
        $controller = "App\\Controllers\\{$controllerName}";
        $controller = new $controller;

        if (! method_exists($controller, $method)) {
            throw new \Exception("{$controllerName} does not respond to the {$method} method.");
        }

        return $controller->$method();
    }
}
