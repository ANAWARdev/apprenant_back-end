<?php
class Database {
    private $host = "localhost";
    private $user = "titi";
    private $password = "titi";
    private $database = "titi";

    public function connect() {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

function databaseIncluded() {
    return true;
}