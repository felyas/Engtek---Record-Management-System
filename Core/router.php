<?php

namespace Core;
use Core\middleware\Auth;
use Core\middleware\Guest;

class Router
{
    public $routes = [];

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null,
        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                if ($route['middleware'] === 'guest') {
                    (new Guest)->handle();
                }

                if ($route['middleware'] === 'auth') {
                    (new Auth)->handle();
                }

                return require base_path("Http/controllers/" . $route['controller']);
            }
        }
        abort();
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }
}
