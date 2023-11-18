<?php

class View
{
    public static $viewsFolderPath = __DIR__ . "/../views/";
    public static $partialsFolderPath = __DIR__ . "/../partials/";
    private $viewName;
    public function __construct($viewName)
    {
        $this->viewName = $viewName;
    }
    public static function render($viewName, $mailStatus = "error")
    {
        $requiredView = self::$viewsFolderPath . $viewName;
        include_once(self::$partialsFolderPath . "layout.php");
    }
}