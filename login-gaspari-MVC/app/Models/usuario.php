<?php
require_once __DIR__ . '/../config/database.php';


class usuario {
private $conn;
public function __construct() {
    $db = new Database();
    $this->conn = $db->conectar();
}

public function autenticar($email, $senha) {
    $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    return $stmt->get_result();
    }
}
?> 