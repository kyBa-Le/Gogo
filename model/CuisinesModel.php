<?php

namespace app\model;

use app\core\Application;
use PDO;

class CuisinesModel
{
    private $db;
    private $table = 'cuisines';

    public function __construct() {
        $this->db = Application::$database;
    }

    public function getCuisines(): array {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        $cuisines = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $cuisines[] = $row;
        }
        return $cuisines;
    }

    public function getCuisinesByID(int $id): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";
        $result = $this->db->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}