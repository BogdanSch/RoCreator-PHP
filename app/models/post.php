<?php
require_once("app/db-settings/dbconnect.php");

$connection = $database->getConnection();
Post::$connection = $connection;

class Post
{
    public $image;
    public $title;
    public $content;
    public $platform;
    public $available;
    public $link;
    public static $connection;

    public function __construct($image, $title, $content, $platform, $available, $link)
    {
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;
        $this->platform = $platform;
        $this->available = $available;
        $this->link = $link;
    }

    public function renderHTML($soft_type = "game")
    {
        $li_header = ($soft_type === "game") ? '<li class="games__item card" data-aos="fade-up" data-aos-duration="2000">' : '<li class="software__item card" data-aos="fade-up" data-aos-duration="2000">';
        $str_start = '
        <img src="./app/assets/img/' . $this->image . '" class="games__img" alt="game image">
        <div class="description">
            <div class="text">
                <h5>' . $this->title . '</h5>
                <p>' . $this->content . '</p>
            </div><div class="type"><span>Platform: </span> ' . $this->platform . '</div>';

        $link = ($this->available)
            ? '<a href="' . $this->link . '" target="_blank" class="btn btn--play">Play</a>'
            : '<a class="btn btn--play unfinished">Play</a>';

        $str_end = '</div>
        <img class="bg--img" src="./app/assets/img/background.png" alt="background">
    </li>';

        return $li_header . $str_start . $link . $str_end;
    }
    public static function out($count, $offset, $soft_type, $search_platform)
    {
        $arr_out = [];

        try {
            $tableName = ($soft_type === "game") ? "games_table" : "soft_table";
            $whereClause = ($search_platform === "all") ? "" : " WHERE `" . $soft_type . "_type` = '" . $search_platform . "'";

            $query = "SELECT * FROM `" . $tableName . "`" . $whereClause . " ORDER BY publish_date DESC LIMIT " . $count . " OFFSET " . $offset;

            if (!$result = Post::$connection->query($query)) {
                throw new Exception('Error selection from table `' . $tableName . '`: [' . Post::$connection->error . ']');
            }

            while ($row = $result->fetch_assoc()) {
                $postItem = new Post(
                    $row[$soft_type . "_image"],
                    $row[$soft_type . "_title"],
                    $row[$soft_type . "_content"],
                    $row[$soft_type . "_type"],
                    $row[$soft_type . "_available"],
                    $row[$soft_type . "_link"]
                );
                $arr_out[] = $postItem;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $arr_out;
    }
}