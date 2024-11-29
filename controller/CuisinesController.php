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

    public function getCuisinesByID($id) {
        $cuisines = $this->cuisinesModel->getCuisinesByID($id);
        $this->response = new Response(json_encode($cuisines));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }
}
?>