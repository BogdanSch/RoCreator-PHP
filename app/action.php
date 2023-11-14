<?php
require_once "db-settings/dbconnectionect.php";
if (!isset($_SESSION)) {
    ob_start();
    session_start();
    ob_end_flush();
}
function out($count, $offset, $soft_type, $search_platform)
{
    global $connection;
    $arr_out = [];
    try {
        if ($search_platform == "all") {
            if ($soft_type == "game") {
                if (!$result = $connection->query("SELECT * FROM `games_table` ORDER BY publish_date DESC LIMIT " . $count . " OFFSET $offset")) {
                    throw new Exception('Error selection from table `news_table`: [' . $connection->error . ']');
                }
            }else{
                if (!$result = $connection->query("SELECT * FROM `soft_table` ORDER BY publish_date DESC LIMIT " . $count . " OFFSET $offset")) {
                    throw new Exception('Error selection from table `news_table`: [' . $connection->error . ']');
                }
            }
        } else {
            if ($soft_type == "game") {
                if (!$result = $connection->query("SELECT * FROM `games_table` WHERE `game_type` = '" . $search_platform . "' ORDER BY publish_date DESC LIMIT " . $count . " OFFSET $offset")) {
                    throw new Exception('Error selection from table `news_table`: [' . $connection->error . ']');
                }
            } else {
                if (!$result = $connection->query("SELECT * FROM `soft_table` WHERE `soft_type` = '" . $search_platform . "' ORDER BY publish_date DESC LIMIT " . $count . " OFFSET $offset")) {
                    throw new Exception('Error selection from table `news_table`: [' . $connection->error . ']');
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
function get_post_item($row, $soft_type = "game")
{
    if($soft_type === "game")  $li_header = '<li class="games__item card">';
    else $li_header = '<li class="software__item card">';
    $str_start = '
    <img src="img/'.($row[$soft_type."_image"]).'" class="games__img" alt="game image">
    <div class="description">
        <div class="text">
            <h5>'.($row[$soft_type.'_title']).'</h5>
            <p>'.($row[$soft_type.'_content']).'</p>
        </div><div class="type"><span>Platform: </span> '.$row[$soft_type.'_type'].'</div>';
    $link = "";
    if($row[$soft_type.'_available']){
        $link = '<a href="'.($row[$soft_type.'_link']).'" target="_blank" class="btn--play">Play</a>';
    }else{
        $link = '<button class="btn--play unfinished">Play</button>';
    }
    $str_end = '</div>
    <img class="bg--img" src="img/background.png" alt="background">
</li>';
    return $li_header.$str_start.$link.$str_end;
}
function check_autorize($log, $pas)
{
    global $connection;
    $sql = "SELECT log FROM Users WHERE log = '" . $log . "' AND pas='" . $pas . "';";

    if ($result = $connection->query($sql)) {
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
    global $connection;
    try {
        $sql = "SELECT log FROM Users WHERE log = '" . $log . "'";
        $result = $connection->query($sql);
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
    global $connection;
    $sql = "INSERT INTO Users (log, pas) VALUES (" . "'" . $log . "', " . "'" . $pas . "')";
    if (!$connection->query($sql)) {
        return false;
    } else {
        $_SESSION['user_login'] = $log;
        return true;
    }
}