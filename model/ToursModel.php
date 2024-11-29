<?php

namespace app\model;

use app\core\Application;
use PDO;

class ToursModel
{
    private $db;
    private $table = 'tours';
    private $sqlJoinTableWhere ;

    public function __construct()
    {
        $this->db = Application::$database;
    }

    public function getTours()
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        $tours = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $tours[] = $row;
        }
        return $tours;
    }

    private function getToursByCriteria($conditions = [])
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
        ";

        $whereClauses = [];
        if (isset($conditions['price'])) {
            $whereClauses[] = "t.price >= {$conditions['price']}";
        }
        if (isset($conditions['date'])) {
            $whereClauses[] = "t.started_date = '{$conditions['date']}'";
        }
        if (isset($conditions['location'])) {
            $whereClauses[] = "cl.name = '{$conditions['location']}'";
        }
        if (!empty($whereClauses)) {
            $sql .= " WHERE " . implode(' AND ', $whereClauses);
        }

        $sql .= " ORDER BY t.price ASC";

        $result = $this->db->query($sql);
        $tours = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $tours[] = $row;
        }
        return $tours;
    }

    public function getToursByPrice($price)
    {
        return $this->getToursByCriteria(['price' => $price]);
    }

    public function getToursByDate($date)
    {
        return $this->getToursByCriteria(['date' => $date]);
    }

    public function getToursByPriceAndDate($price, $date)
    {
        return $this->getToursByCriteria(['price' => $price, 'date' => $date]);
    }

    public function getToursByLocation($location)
    {
        return $this->getToursByCriteria(['location' => $location]);
    }

}
