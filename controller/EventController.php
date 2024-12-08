<?php

namespace app\controller;

use app\core\Response;
use app\model\EventModel;

class EventController
{
    private EventModel $eventModel;
    private Response $response;

    public function __construct()
    {
        $this->eventModel = new EventModel();
    }


    public function getEvents() {
        $events = $this->eventModel->getEvents();
        $this->response = new Response(json_encode($events));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function getEventById($id) {
        $event = $this->eventModel->getEventById($id);
        $this->response = new Response(json_encode($event));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function getEventByMonthAndYear(int $month, int $year) {
        $events = $this->eventModel->getEventByMonthAndYear($month, $year);
        $this->response = new Response(json_encode($events));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }
}