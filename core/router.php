<?php
namespace Core;
class Router {
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[$uri] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller
        ];
    }


    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }
    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }
    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }
    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }
    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    //// function that aborts the request
    protected function abort($statusCode = 404)
    {
        http_response_code($statusCode);

        require base_path("controllers/{$statusCode}.php");

        die($statusCode);
    }
}
