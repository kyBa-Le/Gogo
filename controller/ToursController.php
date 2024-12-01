<?php

namespace app\controller;

use app\core\Response;
use app\model\ToursModel;

class  ToursController
{
    private $toursModel;
    private $response;

    public function __construct() {
        $this->toursModel = new ToursModel();
    }

    public function getTours() {
        $tours = $this->toursModel->getTours();
        $this->response = new Response(json_encode($tours));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function getToursByLocation($location) {
        $tours = $this->toursModel->getToursByLocation($location);
        $this->response = new Response(json_encode($tours));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function filterTours($price, $date)
    {
        
        $price = $price !== "" ? (int)$price : null; 
        $date = !empty($date) ? (string)$date : null;
    
        if ($price === null && $date !== null) {
            $tours = $this->toursModel->getToursByDate($date);
        }
        elseif ($date === null && $price !== null) {
            $tours = $this->toursModel->getToursByPrice($price);
        } elseif ($price !== null && $date !== null) {
            $tours = $this->toursModel->getToursByPriceAndDate($price, $date);
        } else {
            error_log("No filtering, returning all tours.");
        }
    
        $this->response = new Response(json_encode($tours));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }       
}
?>  