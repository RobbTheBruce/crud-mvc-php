<?php
namespace app\config;

class database {

    private $host = "localhost:3306";
    private $usuario = "root";
    private $senha = "";
    private $db = "test";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->usuario, $this->senha);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function prepare($sql) {
        return $this->conn->prepare($sql);
    }

}
