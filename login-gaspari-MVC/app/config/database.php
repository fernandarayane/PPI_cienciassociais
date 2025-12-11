<?php
class Database {
private $host = 'localhost';
private $usuario = 'root';
private $senha = '';
private $db = 'login';

public function conectar() {
    $conn = new mysqli($this->host, $this->usuario, $this->senha, $this->db);
    if($conn->connect_error)
        die('Erro ao conectar.');
    return $conn;
    }
}
?>