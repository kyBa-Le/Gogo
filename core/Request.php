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

    public function getPathVariable($pattern) {
        $path = $this->getPath();

        if (strpos($pattern, '{') === false) {
            return ($path === $pattern) ? [] : [];
        }

        // Nếu mẫu có tham số động, chuyển mẫu thành regex
        // Thay {id} thành [^/]+ để khớp với bất kỳ giá trị nào trong URL
        $regexPattern = preg_replace('/\{(\w+)\}/', '([^/]+)', $pattern);

        // Kiểm tra xem đường dẫn hiện tại có khớp với mẫu regex đã chuyển đổi không
        if (preg_match("#^{$regexPattern}$#", $path, $matches)) {
            // Loại bỏ phần tử đầu tiên trong mảng $matches vì đó là toàn bộ URL khớp
            array_shift($matches);

            // Trả về các tham số đã trích xuất
            return $matches;
        }

        // Nếu không khớp, trả về mảng rỗng
        return [];
    }

    public static function getParam($name, $default = null) {
        if (isset($_REQUEST[$name])) {
            return $_REQUEST[$name];
        }
        return $default;
    }

    public function getBody() {
        // Kiểm tra Content-Type của yêu cầu
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

        if (strpos($contentType, 'application/json') !== false) {
            // Xử lý JSON
            $rawBody = file_get_contents('php://input');
            $body = json_decode($rawBody, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                return null; // JSON không hợp lệ
            }
            return $body;
        } elseif (strpos($contentType, 'application/x-www-form-urlencoded') !== false || strpos($contentType, 'multipart/form-data') !== false) {
            // Xử lý form HTML
            $body = [];
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
            return $body;
        }

        return null; // Không hỗ trợ loại Content-Type khác
    }
}