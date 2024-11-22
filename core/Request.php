<?php

namespace app\core;

class Request
{
    public function getPath() {
        $path = $_SERVER['REQUEST_URI'] ?? "/";
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }
    public function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    // Lấy các phần của đường dẫn (path variables)
    public function getPathVariable($pattern) {
        $path = $this->getPath();
        $regexPattern = preg_replace('/\{(\w+)}/', '([^/]+)', $pattern);
        if (preg_match("#^{$regexPattern}$#", $path, $matches)) {
            array_shift($matches);
            return $matches;
        }
        return [];
    }

    public static function getParam($name, $default = null) {
        if (isset($_REQUEST[$name])) {
            return $_REQUEST[$name];
        }
        return $default;
    }
}