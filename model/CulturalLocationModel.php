<?php

namespace app\model;

use app\core\Application;
use PDO;

class CulturalLocationModel 
{
    private $db;
    private $table = 'cultural_location';

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

    public function getCulturalLocationById(int $id): array
    {
        // Truy vấn chi tiết địa điểm văn hóa
        $sql = "SELECT * FROM cultural_location WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql); // Thay đổi ở đây
        $stmt->execute(['id' => $id]);
        $culturalLocation = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Lấy danh sách món ăn (dishes) thông qua liên kết với cuisines
        $sqlDishes = "
            SELECT d.id, d.name, d.description, d.image_url 
            FROM dishes d
            JOIN cuisines c ON d.cuisines_id = c.id
            WHERE c.location_id = :id
        ";
        $stmtDishes = $this->db->pdo->prepare($sqlDishes); // Thay đổi ở đây
        $stmtDishes->execute(['id' => $id]);
        $culturalLocation['dishes'] = $stmtDishes->fetchAll(PDO::FETCH_ASSOC);
    
        // Lấy danh sách sự kiện liên quan
        $sqlEvents = "SELECT * FROM events WHERE cultural_location_id = :id";
        $stmtEvents = $this->db->pdo->prepare($sqlEvents); // Thay đổi ở đây
        $stmtEvents->execute(['id' => $id]);
        $culturalLocation['events'] = $stmtEvents->fetchAll(PDO::FETCH_ASSOC);
    
        // Lấy danh sách tour liên quan
        $sqlTours = "SELECT * FROM tour WHERE cultural_location_id = :id";
        $stmtTours = $this->db->pdo->prepare($sqlTours); // Thay đổi ở đây
        $stmtTours->execute(['id' => $id]);
        $culturalLocation['tours'] = $stmtTours->fetchAll(PDO::FETCH_ASSOC);
    
        // Lấy đánh giá từ người dùng
        $sqlReviews = "
            SELECT r.detail, r.rating, r.review_date, u.username 
            FROM reviews r
            JOIN users u ON r.user_id = u.id
            WHERE r.id = :id
        ";
        $stmtReviews = $this->db->pdo->prepare($sqlReviews); // Thay đổi ở đây
        $stmtReviews->execute(['id' => $id]);
        $culturalLocation['reviews'] = $stmtReviews->fetchAll(PDO::FETCH_ASSOC);
    
        return $culturalLocation;
    }    

}
