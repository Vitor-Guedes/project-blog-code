<?php

namespace BlogCodar;

class App
{
    protected $routes = [];

    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        foreach ($this->routes[$method] ?? [] as $route) {
            if (preg_match($route['pattern'], $uri)) {
                preg_match_all("~\{\s*([a-zA-Z_][a-zA-Z0-9_-]*)\}~x", $route['path'], $keys, PREG_SET_ORDER);
                $diff = array_values(array_diff(explode("/", $uri), explode("/", $route['path'])));
                $params = [];
                foreach ($keys as $key) {
                    $params[$key[1]] = array_shift($diff);
                }

                return call_user_func_array($route['callable'], $params);
            }
        }
        return view('404');
    }

    public function get(string $path, array $callable, array $settings = [])
    {
        $this->on(__FUNCTION__, $path, $callable, $settings);
    }

    public function post(string $path, array $callable, array $settings = [])
    {
        $this->on(__FUNCTION__, $path, $callable, $settings);
    }

    protected function on(string $method, string $path, array $callable, array $settings = [])
    {
        $pattern = preg_replace('~{([^}]*)}~', "([^/]+)", $path);
        $pattern = "/^" . str_replace('/', '\/', $pattern) . "$/";

        $this->routes[$method][] = [
            'path' => $path,
            'pattern' => $pattern,
            'callable' => $callable,
            'settings' => $settings
        ];
    }

    public function getRoutePathByName(string $routeName = '')
    {
        foreach ($this->routes as $method => $collection) {
            foreach ($collection as $route) {
                if (!isset($route['settings']['name'])) {
                    continue ;
                }

                if ($route['settings']['name'] == $routeName) {
                    return $this->getBaseUrl() . $route['path'];
                }
            }
        }
        return $this->getBaseUrl();
    }

    protected function getBaseUrl()
    {
        $http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  
        return $http . $_SERVER['HTTP_HOST'];
    }
}