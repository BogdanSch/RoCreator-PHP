<?php
function autoload_models($className) {
    $fileName = __DIR__ . "/../models/".$className.".php";
    include $fileName;
}

spl_autoload_register ("autoload_models");