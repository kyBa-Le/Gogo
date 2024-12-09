<?php

namespace app\model;

use app\core\Application;
use PDO;

class BookingModel
{
    private $db;
    private $table = 'bookings';

    public function __construct()
    {
        $this->db = Application::$database;
    }

    public function getBookingsOfUser($userId)
    {
        $sql = "SELECT {$this->table}.*,
                tours.name as tour_name,
                tours.image_url as tour_image_url,
                tours.id as tour_id,
                tours.description as tour_description,
                tours.started_date as tour_start_date,
                tours.completed_date as tour_completed_date,
                tours.cultural_location_id as tour_location_id
        FROM {$this->table} join tours on {$this->table}.tour_id = tours.id
        WHERE bookings.user_id = '$userId'";
        $result = $this->db->query($sql);
        $bookings = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $bookings[] = $row;
        }
        return $bookings;
    }
}
