<?php
class Database {
    private $host = "localhost";
    private $db_name = "perpustakaan_digital";
    private $username = "root";
    private $password = "admin123";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" .$this->host. ";dbname=" .$this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>