<?php

declare(strict_types = 1);

/**
 * Define Database Connections
 * Class Database
 */
class Database {
    // specify your own database credentials
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    // get the database connection
    public function getConnection()
    {
        if (!file_exists("../etc/env.php")) {
            throw new Exception(
                "Environment file does not exist. Please create one using the env.php.example file."
            );
        }

        include_once '../etc/env.php';

        $this->host = DB_HOST;
        $this->db_name = DB_NAME;
        $this->username = DB_USER;
        $this->password = DB_PASSWORD;
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password
            );
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
