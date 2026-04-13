<?php
require_once __DIR__ . '/../../config/database.php';

class User {
    private $conn;
    private $table = "usuarios";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function findByEmail($email) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function create($nombre, $email, $password, $rol_id) {
    $query = "INSERT INTO " . $this->table . " 
              (nombre, email, password, rol_id) 
              VALUES (:nombre, :email, :password, :rol_id)";

    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':rol_id', $rol_id);

    return $stmt->execute();
}
}

