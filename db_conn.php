<?php
class Database {
    private $host = '173.252.167.200:3306';
    private $username = 'pawsandw_root_capstone';
    private $password = 'capstone_rootPass';
    private $database = 'pawsandw_capstone_db';
    private $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}

// Create a new instance of the Database class
$db = new Database();

// Optionally, you can get the connection object
$conn = $db->getConnection();

// Note: You don't need to call getConnection() if you don't need to use the connection directly in this file
// The getConnection() method can be called in other files where you need to use the connection

// Optionally, you can close the connection when you're done with it
// $db->closeConnection();
?>
