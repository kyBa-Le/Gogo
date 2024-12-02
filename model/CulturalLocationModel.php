<?php

namespace app\model;

use app\core\Application;
use PDO;

class CulturalLocationModel 
{
    private $db;
    private $table = 'cultural_locations';

    public function __construct() {
        $this->db = Application::$database;
    }

    public function getCulturalLocations(): array 
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        $culturalLocations = [];
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $culturalLocations[] = $row; 
        }
        return $culturalLocations; 
    }

    public function getCulturalLocationById(int $id): array { 
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";
        $result = $this->db->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}