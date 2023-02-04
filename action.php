<?php
require_once "db-settings/dbconnect.php";
if (!isset($_SESSION)) {
    ob_start();
    session_start();
    ob_end_flush();
}
function out($count, $offset, $soft_type, $search_platform)
{
    global $conn;
    $arr_out = [];
    try {
        if ($search_platform == "All") {
            if (!$result = $conn->query("SELECT * FROM `games_table` ORDER BY publish_date DESC LIMIT " . $count . " OFFSET $offset")) {
                throw new Exception('Error selection from table `news_table`: [' . $conn->error . ']');
            }
        } else {
            if ($soft_type == "game") {
                if (!$result = $conn->query("SELECT * FROM `games_table` WHERE `game_type` = '" . $search_platform . "' ORDER BY publish_date DESC LIMIT " . $count . " OFFSET $offset")) {
                    throw new Exception('Error selection from table `news_table`: [' . $conn->error . ']');
                }
            } else {
                if (!$result = $conn->query("SELECT * FROM `soft_table` WHERE `soft_type` = '" . $search_platform . "' ORDER BY publish_date DESC LIMIT " . $count . " OFFSET $offset")) {
                    throw new Exception('Error selection from table `news_table`: [' . $conn->error . ']');
                }
            }
        }
        while ($row = $result->fetch_assoc()) {
            $arr_out[] = $row;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $arr_out;
}
function get_post_item($row)
{
    $str_start = '<li class="games__item card">
    <img src="img/'.($row['game_image']).'" class="games__img" alt="">
    <div class="description">
        <div class="text">
            <h5>'.($row['game_title']).'</h5>
            <p>'.($row['game_content']).'</p>
        </div><div class="type"><span>Type: </span> '.$row['game_type'].'</div>';
    $link = "";
    if($row['game_available']){
        $link = '<a href="'.($row['game_link']).'" target="_blank" class="btn--play">Play</a>';
    }else{
        $link = '<button class="btn--play unfinished">Play</button>';
    }
    $str_end = '</div>
    <img class="bg--img" src="img/background.png" alt="background">
</li>';
    return $str_start.$link.$str_end;
}
function check_autorize($log, $pas)
{
    global $conn;
    $sql = "SELECT log FROM Users WHERE log = '" . $log . "' AND pas='" . $pas . "';";

    if ($result = $conn->query($sql)) {
        $n = $result->num_rows;
        if ($n != 0) {
            $_SESSION['user_login'] = $log;
            return true;
        } else {
            return false;
        }
    }
}
function check_log($log)
{
    global $conn;
    try {
        $sql = "SELECT log FROM Users WHERE log = '" . $log . "'";
        $result = $conn->query($sql);
        $n = $result->num_rows;
        if ($n != 0) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
function registration($log, $pas)
{
    global $conn;
    $sql = "INSERT INTO Users (log, pas) VALUES (" . "'" . $log . "', " . "'" . $pas . "')";
    if (!$conn->query($sql)) {
        return false;
    } else {
        $_SESSION['user_login'] = $log;
        return true;
    }
}