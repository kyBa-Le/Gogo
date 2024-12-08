<?php

namespace app\core;

class Application
{
    public Router $router;
    public Request $request;
    public static Database $database;
    public function __construct()
    {
        $args = func_get_args();
        $this->request = new Request();
        $this->router = new Router($this->request);
        if ($args !=  0) {
            self::$database = new Database($args[0]['db']);
        }
    }

    public function run() {
        return $this->router->resolve();
    }
}