<?php
require_once "config.php";

try {
    $connection = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    if ($connection->connect_error) {
        throw new Exception("Connection failed: " . $connection->connect_error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}