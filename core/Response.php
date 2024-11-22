<?php

namespace app\core;

class Response
{
    private $data;
    private $statusCode;
    private $headers = [];

    public function __construct($data = null, $statusCode = 200)
    {
        $this->data = $data;
        $this->statusCode = $statusCode;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    public function send()
    {
        http_response_code($this->statusCode);

        foreach ($this->headers as $key => $value) {
            header("$key: $value");
        }

        echo json_encode($this->data); // Hoặc bất kỳ định dạng nào khác
    }
}