<?php
require __DIR__ . "/../vendor/autoload.php";

use app\core\Application;
use app\core\Router;

$app = new Application();

$app->router->get('/', function () {
    echo Router::renderView("home");
});

$app->run();
