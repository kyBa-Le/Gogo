<?php

namespace app\model;

use app\core\Application;
use PDO;

class UserModel
{
    private $db;
    private $table = 'users';

    public function __construct() {
        $this->db = Application::$database;
    }

    public function getUsersByEmail($email) {
        $sql = "SELECT * FROM {$this->table} WHERE email = '$email'";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($email,
                               $username,
                               $password,
                               $fullName,
                               $phone ) {
        $passwordHashed = md5($password);
        $created_date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO {$this->table}(email, username, password, fullname, phone, created_date) 
        VALUES ('$email', '$username', '$passwordHashed', '$fullName', '$phone', '$created_date')";
        $this->db->query($sql);
    }

    public function getUserByEmailAndPassword($email, $password) {
        $passwordHashed = md5($password);
        $sql = "SELECT * FROM {$this->table} WHERE email = '$email' AND password = '$passwordHashed'";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateUser($username, $fullName, $email, $phone, $id) {
        $sql = "UPDATE {$this->table} SET username = '$username', fullname = '$fullName', email = '$email', phone = '$phone' WHERE id = '$id'";
        $this->db->query($sql);
    }

    public function getUserById ($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = '$id'";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
}