<?php

namespace app\controller;

use app\core\Response;
use app\model\BookingModel;

class BookingController
{
    private $model;
    private $response;
    public function __construct() {
        $this->model = new BookingModel();
    }

    public function getBookingsForUser() {
        $userId = $_SESSION['user']['id'];
        $bookings = $this->model->getBookingsOfUser($userId);
        $this->response = new Response(json_encode($bookings));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }
}