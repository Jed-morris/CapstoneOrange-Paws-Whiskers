<?php
class Database {
    private $host = '173.252.167.200:3306';
    private $username = 'pawsandw_root_capstone';
    private $password = 'capstone_rootPass';
    private $database = 'pawsandw_capstone_db';
    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host={$this->host}; dbname={$this->database}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Create a new instance of the Database class
$db = new Database();

// Optionally, you can get the connection object
$conn = $db->getConnection();
?>
