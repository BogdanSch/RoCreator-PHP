<?php
require_once "config.php";

class Database
{
    private $connection;

    public function __construct($servername, $username, $password, $dbname)
    {
        try {
            $this->connection = new mysqli($servername, $username, $password, $dbname);

            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

$database = new Database(SERVERNAME, USERNAME, PASSWORD, DBNAME);