<?php

namespace app\controller;

use app\core\Response;
use app\model\CulturalLocationModel;

class CulturalLocationController
{
    private $culturalLocationRepository;
    private $response;

    public function __construct()
    {
        $this->culturalLocationRepository = new CulturalLocationModel();
    }

    public function getCulturalLocations() {
        $culturalLocations = $this->culturalLocationRepository->getCulturalLocations();
        $this->response = new Response(json_encode($culturalLocations));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function getCulturalLocationById($id) {
        $culturalLocation = $this->culturalLocationRepository->getCulturalLocationById($id);
        $this->response = new Response(json_encode($culturalLocation));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }
}