<?php

class Connection {
    private $server = 'localhost';
    private $password = '';
    private $user = 'root';
    private $database = "ClientesDB";

    public $conn;

    public function Connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->server."; dbname=".$this->database, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            echo "Error: ".$error->getMessage();
        }

        return $this->conn;
    }
}
?>