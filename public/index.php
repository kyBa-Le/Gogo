<?php
require __DIR__ . "/../vendor/autoload.php";

use app\controller\EventController;
use app\core\Application;
use app\core\Request;
use app\core\Router;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

// remove $config in Application() if you want to run app without database connection
$app = new Application($config);

// Đường dẫn cho các trang

$app->router->get('/', function () {
    echo Router::renderView("home");
});

$app->router->get("/events", function() {
    echo Router::renderView("event");
});

$app->router->get('/events/{id}', function() {
    echo Router::renderView("eventDetail");
});

// Đường dẫn cho API

$app->router->get("/api/events", function() {
    $eventController = new EventController();
    $eventController->getEvents();
});

$app->router->get("/api/events/{id}", function($id) {
    $eventController = new EventController();
    $eventController->getEventById($id);
});

$app->router->get("/api/events/search", function() {
    $year = Request::getParam("year");
    $month = Request::getParam("month");
    $eventController = new EventController();
    $eventController->getEventByMonthAndYear($month, $year);
});

$app->run();
