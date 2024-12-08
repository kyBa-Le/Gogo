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

        // Xử lý các route tĩnh trước
        foreach ($this->routes[$method] as $pattern => $callback) {
            // Nếu pattern không có tham số động (không chứa '{')
            if (strpos($pattern, '{') === false) {
                // So sánh trực tiếp với đường dẫn
                if ($path === $pattern) {
                    call_user_func($callback); // Gọi callback cho route tĩnh
                    return;
                }
            }
        }

        // Sau khi xử lý các route tĩnh, tiếp tục xử lý các route động
        foreach ($this->routes[$method] as $pattern => $callback) {
            $pathVariables = $this->request->getPathVariable($pattern);

            if (!empty($pathVariables)) {
                call_user_func_array($callback, $pathVariables); // Gọi callback cho route động
                return;
            }
        }

        // Nếu không tìm thấy route phù hợp, trả về lỗi 404
        http_response_code(404);
        echo "Not Found";
    }

    public static function renderView($view, $params = []) {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        require_once "view/$view.php";
        return ob_get_clean();
    }
}