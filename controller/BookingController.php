<?php

namespace app\controller;

use app\core\Response;
use app\model\BookingModel;
use app\model\UserModel;
use app\thirdPartiesService\BookingEmail;
use app\thirdPartiesService\EmailSender;

class BookingController
{
    private $model;
    private $response;
    public function __construct() {
        $this->model = new BookingModel();
    }

    public function getBookingsForUser(): void
    {
        session_start();
        $userId = $_SESSION['user']['id'];
        $bookings = $this->model->getBookingsOfUser($userId);
        $this->response = new Response(json_encode($bookings));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function createBooking($data) {
        session_start();
        $data = $_SESSION['booking'];
        $userId = $_SESSION['user']['id'];
        $email = $data['email'];
        $phone = $data['phone'];
        $fullname = $data['fullname'];
        $tourId = $data['tour_id'];
        $totalCost = $data['totalCost'];
        $this->model->saveBooking($userId, $email, $phone, $fullname, $tourId, $totalCost);
        $email = new BookingEmail($_SESSION['user']['username']);
        $emailSender = new EmailSender();
        $emailSender->sendEmail(
            $data['email'],
            $data['fullname'],
            $email->subject,
            $email->emailContent );
        unset($_SESSION['booking']);
        header('Location: /payment-success');
    }
}