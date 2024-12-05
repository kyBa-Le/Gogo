<?php

namespace app\model;

use app\core\Application;
use PDO;

class BookingModel
{
    private $db;
    private $table = 'booking';

    public function __construct() {
        $this->db = Application::$database;
    }

    public function getBookingsOfUser($userId) {
        //todo: change the sql syntax after fix
        $sql = "SELECT b.*, t.*
                FROM $this->table AS b
                JOIN tours AS t ON b.tour_id = t.id 
                WHERE b.user_id = $userId";
        $result = $this->db->query($sql);
        $booking = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $booking[] = $row;
        }
        return $booking;
    }
}