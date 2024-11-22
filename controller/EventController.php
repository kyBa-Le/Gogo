<?php

namespace app\controller;

use app\core\Response;
use app\model\EventModel;

class EventController
{
    private $eventRepository;
    private $response;

    public function __construct()
    {
        $this->eventRepository = new EventModel();
    }


    public function getEvents() {
        $events = $this->eventRepository->getEvents();
        $this->response = new Response(json_encode($events));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function getEventById($id) {
        $event = $this->eventRepository->getEventById($id);
        $this->response = new Response(json_encode($event));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }
}