<?php

require_once("app/router.php");

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/app/views/';

$router = new Router();

$router->addPage404Handler(function () {
    global $viewDir;
    require __DIR__ . $viewDir . '404.php';
});

$router->get('/', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'home.php';
});

$router->get('/games-android', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'games-android.php';
});

$router->get('/games-roblox', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'games-roblox.php';
});

$router->get('/software', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'software.php';
});

$router->get('/privacy', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'privacy.php';
});

$router->get('/contacts', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'contacts.php';
});

$router->run();