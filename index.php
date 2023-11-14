<?php

require_once("router.php");

$request = $_SERVER['REQUEST_URI'];
$siteBase = "/RoCreator-PHP";
$viewDir = '/views/';

// print_r($request);
$router = new Router();

$router->get('/', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'home.php';
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

$router->get('/contact', function () {
    global $viewDir;
    require __DIR__ . $viewDir . 'contact.php';
});
