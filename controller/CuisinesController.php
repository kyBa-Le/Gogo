<?php

namespace app\controller;

use app\core\Response;
use app\model\CuisinesModel;

class CuisinesController
{
    private $cuisinesModel;
    private $response;

    public function __construct() {
        $this->cuisinesModel = new CuisinesModel();
    }

    public function getCuisines() {
        $cuisines = $this->cuisinesModel->getCuisines();
        $this->response = new Response(json_encode($cuisines));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function getCuisinesById($id) {
        $cuisines = $this->cuisinesModel->getCuisinesById($id);
        $this->response = new Response(json_encode($cuisines));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function getCuisinesByLocationId($location_id) {
        $cuisines = $this->cuisinesModel->getCuisinesByLocationId($location_id);
        $this->response = new Response(json_encode($cuisines));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }
}
?>