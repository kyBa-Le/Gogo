<?php

namespace app\model;

use app\core\Application;
use PDO;

class ToursModel
{
    private $db;
    private $table = 'tours';

    public function __construct()
    {
        $this->db = Application::$database;
    }

    public function getTours(): array
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        $tours = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $tours[] = $row;
        }
        return $tours;
    }

    public function getToursByLocation(string $location): array
    {
        $sql = "
            SELECT 
                t.id, 
                t.name, 
                t.description, 
                t.started_date, 
                t.completed_date, 
                t.price, 
                t.image_url, 
                cl.name AS location_name,
                cl.region AS region
            FROM 
            {$this->table} t
            JOIN 
                cultural_locations cl 
            ON 
                t.cultural_location_id = cl.id 
            WHERE 
                cl.name = '$location'
        ";

        $result = $this->db->query($sql);
        $tours = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $tours[] = $row;
        }
        return $tours;
    }
}
