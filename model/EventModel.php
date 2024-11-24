<?php

namespace app\model;

use app\core\Application;
use PDO;

class EventModel
{
    private $db;
    private $table = 'events';
    public function __construct() {
        $this->db = Application::$database;
    }

    public function getEvents(): array
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        $events = [];
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $events[] = $row;
        }
        return $events;
    }

    public function getEventById(int $id): array {
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";
        $result = $this->db->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}