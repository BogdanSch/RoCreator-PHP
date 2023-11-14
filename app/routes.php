<?php 

$router = new Router();

$router->addPage404Handler(function () {
    View::render("404.php");
});

$router->get('/', function () {
    View::render("home.php");
});

$router->get('/home', function () {
    View::render("home.php");
});

$router->get('/games-android', function () {
    View::render("games-android.php");
});

$router->get('/games-roblox', function () {
    View::render("games-roblox.php");
});

$router->get('/software', function () {
    View::render("software.php");
});

$router->get('/privacy', function () {
    View::render("privacy.php");
});

$router->get('/contacts', function () {
    View::render("contacts.php");
});

$router->run();