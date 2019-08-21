<?php

namespace App\Core;

class Router
{
    /**
     * Array of registered routes.
     *
     * @var array
     */
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];

    /**
     * Load router file.
     *
     * @param  string $file
     * @return \App\Core\Reouter
     */
    public static function load($file)
    {
        $router = new self;

        require $file;

        return $router;
    }

    /**
     * Register a get route.
     *
     * @param string $uri
     * @param string $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * Register a post route.
     *
     * @param string $uri
     * @param string $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Invoke the requestes method on the controller.
     *
     * @param string $uri
     * @param string $requestType
     */
    public function direct($uri, $requestType)
    {
        if (! array_key_exists($uri, $this->routes[$requestType])) {
            throw new \Exception('There isn\'t any route for this URI.');
        }

        return $this->callMethod(
            ...explode('@', $this->routes[$requestType][$uri])
        );
    }

    /**
     * Call requested method on the controller.
     *
     * @param string $controllerName
     * @param string $method
     */
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
