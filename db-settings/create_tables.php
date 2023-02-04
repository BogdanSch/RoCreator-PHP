<?php
require_once "dbconnect.php";

try {
    $conn->query("SET NAMES utf8mb4");
    $conn->query("SET CHARACTER SET utf8mb4");

    if (!$conn->query("CREATE TABLE IF NOT EXISTS Games_Table (id INT NOT NULL AUTO_INCREMENT, game_title VARCHAR(100), game_content TEXT, game_type VARCHAR(100), game_image VARCHAR(100), publish_date DATETIME, game_link VARCHAR(250), game_available BOOLEAN, PRIMARY KEY (id))")) {
        throw new Exception('Error creation table GBookTable: [' . $conn->error . ']');
    }
    if (!$conn->query("CREATE TABLE IF NOT EXISTS Soft_Table (id INT NOT NULL AUTO_INCREMENT, soft_title VARCHAR(100), soft_content TEXT, soft_type VARCHAR(100), soft_image VARCHAR(100), publish_date DATETIME, soft_link VARCHAR(250), soft_available BOOLEAN, PRIMARY KEY (id))")) {
        throw new Exception('Error creation table GBookTable: [' . $conn->error . ']');
    }
    if (!$conn->query("CREATE TABLE  IF NOT EXISTS Users (user_id INT NOT NULL AUTO_INCREMENT, log VARCHAR(255), pas  VARCHAR(255), PRIMARY KEY (user_id))")) {
        throw new Exception('Error creation table  Users: [' . $conn->error . ']');
    }
    // if (!$conn->query("INSERT INTO Users (log, pas) VALUES ('pit', '123')")) {
    //     throw new Exception('Error creation table  Users: [' . $conn->error . ']');
    // }
    // if (!$conn->query("INSERT INTO Users (log, pas) VALUES ('admin', 'admin')")) {
    //     throw new Exception('Error creation table  Users: [' . $conn->error . ']');
    // }
    // if (!$conn->query("INSERT INTO Games_Table (game_title, game_content, game_type, game_image, publish_date, game_link, game_available) VALUES ('Forest Story', 'Forest is the place where you can explore and spend you time. You with the group of tourists set off to the sea but something got wrong and you need to stay in the forest.', 'Roblox', 'image3 1.png', NOW(), '', 1)")) {
    //     throw new Exception('Error creation table  Users: [' . $conn->error . ']');
    // }
    if (!$conn->query("INSERT INTO Soft_Table (soft_title, soft_content, soft_type, soft_image, publish_date, soft_link, soft_available) VALUES ('Calculator for android', 'This is an important thing ever. This calculator has a nice design and can do all operations what you need. Made for android devices. It doesn\'t have any virus!', 'Android', 'image4.png', NOW(), '', 0)")) {
        throw new Exception('Error creation table  Users: [' . $conn->error . ']');
    }
    echo "Tables created successfully!";
    $conn->close();

} catch (Exception $e) {
    echo $e->getMessage();
}