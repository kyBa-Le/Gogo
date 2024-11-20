<?php

namespace app\core;

class Router
{
    public $routes = [];
    public Request $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get($path, $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback): void
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if (!$callback) {
            http_response_code(404);
            echo "Not Found";
        }
        if (is_string($callback)) {
            echo $callback;
            exit;
        }
        return call_user_func($callback);
    }

    public static function renderView($view, $params = []) {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        require_once __DIR__ . "/../view/$view.php";
        return ob_get_clean();
    }
}