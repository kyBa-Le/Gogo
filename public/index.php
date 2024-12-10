<?php
require __DIR__ . "/../vendor/autoload.php";

use app\controller\BookingController;
use app\controller\EventController;
use app\controller\CuisinesController;
use app\controller\MiddleWare;
use app\controller\MomoController;
use app\controller\UserController;
use app\controller\CulturalLocationController;
use app\controller\ToursController;
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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// remove $config in Application() if you want to run app without database connection
$app = new Application($config);

// Đường dẫn cho các trang

$app->router->get('/', function () {
    echo Router::renderView("home");
});

$app->router->get("/events", function () {
    echo Router::renderView("event");
});

$app->router->get("/cuisines", function () {
    echo Router::renderView("cuisines");
});

$app->router->get('/cuisines/{id}', function () {
    echo Router::renderView("cuisinesDetail");
});

$app->router->get('/events/{id}', function () {
    echo Router::renderView("eventDetail");
});

$app->router->get("/sign-up", function () {
    echo Router::renderView("signUp");
});

$app->router->get("/sign-in", function () {
    echo Router::renderView("signIn");
});

$app->router->get("/cultures", function () {
    echo Router::renderView("culturalLocation");
});

$app->router->get("/cultural_locations/{id}", function () {
    echo Router::renderView("cultureDetail");
});

$app->router->get("/search", function () {
    echo Router::renderView("search");
});

$app->router->get('/booking', function () {
    echo Router::renderView("booking");
});

$app->router->get('/tours', function() {
    echo Router::renderView(("tours"));
});

$app->router->get("/tours/{id}", function() {
    echo Router::renderView("tourDetails");
});

$app->router->get('/licence', function () {
    echo Router::renderView("licence");
});

$app->router->get("/profile", function () {
    echo Router::renderView("profile");
});

$app->router->get('/checkout/{id}', function () {
    echo Router::renderView("checkout");
});

$app->router->get('/payment-success', function () {
    echo Router::renderView("paymentSucess");
});
$app->router->post('/pay', function () {
    $request = new Request();
    $data = $request->getBody();
    $momoController = new MomoController();
    $momoController->onlineCheckOut($data);
});
// Đường dẫn cho API

$app->router->get("/api/events", function () {
    $eventController = new EventController();
    $eventController->getEvents();
});

$app->router->get("/api/events/{id}", function ($id) {
    $eventController = new EventController();
    $eventController->getEventById($id);
});

$app->router->get("/api/cuisines", function () {
    $cuisinesController = new CuisinesController();
    $cuisinesController->getCuisines();
});

$app->router->get("/api/cuisines/{id}", function ($id) {
    $cuisinesController = new CuisinesController();
    $cuisinesController->getCuisinesById($id);
});

$app->router->get("/api/events/search", function () {
    $year = Request::getParam("year");
    $month = Request::getParam("month");
    $eventController = new EventController();
    $eventController->getEventByMonthAndYear($month, $year);
});

$app->router->post("/api/sign-up", function () {
    $request = new Request();
    $data = $request->getBody();
    $userController = new UserController();
    $userController->signUp($data);
});

$app->router->get("/api/tours", function () {
    $cuisinesController = new ToursController();
    $cuisinesController->getTours();
});

$app->router->get('/api/is-signed-in', function () {
    $middleWare = new MiddleWare();
    $middleWare->getIsSignedIn();
});

$app->router->get("/api/tours/search", function () {
    $location = Request::getParam("location");
    $toursController = new ToursController();
    if ($location !== null) {
        $toursController->getToursByLocation($location);
    } else {
        $dateInclude = Request::getParam("date-include");
        $locationId = Request::getParam("location-id");
        $toursController->getTourForEvent($dateInclude, $locationId);
    }
});

$app->router->get("/api/tours/filter", function () {
    $price = Request::getParam("price");
    $date = Request::getParam("when");
    $toursController = new ToursController();
    $toursController->filterTours($price, $date);
});

$app->router->get("/api/cultural_locations", function () {
    $culturalLocationController = new CulturalLocationController();
    $culturalLocationController->getCulturalLocations();
});

$app->router->get("/api/cultural_locations/{id}", function ($id) {
    $culturalLocationController = new CulturalLocationController();
    $culturalLocationController->getCulturalLocationById($id);
});

$app->router->post("/api/sign-in", function () {
    $request = new Request();
    $data = $request->getBody();
    $userController = new UserController();
    $userController->signIn($data);
});

$app->router->get('/api/users/bookings', function () {
    $bookingController = new BookingController();
    $bookingController->getBookingsForUser();
});

$app->router->get('/api/tours/{id}', function ($id) {
    $tourController = new ToursController();
    $tourController->getTourById($id);
});

$app->router->get('/api/checkout/{id}', function ($id) {
    $tourController = new ToursController();
    $tourController->getTourById($id);
});

$app->router->get('/api/user', function () {
    $userController = new UserController();
    $userController->getUser();
});

$app->router->post('/api/users/update', function () {
    $request = new Request();
    $data = $request->getBody();
    $userController = new UserController();
    $userController->updateUser($data);
});

$app->router->get('/api/checkout', function () {
    $request = new Request();
    $data = $request->getBody();
    $bookingController = new BookingController();
    $bookingController->createBooking($data);

});

$app->router->get('/api/logout' , function () {
    session_start();
    session_destroy();
    header("Location: /");
});

$app->run();
