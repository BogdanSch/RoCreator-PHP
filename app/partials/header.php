<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="JtEQNzTX0hiaDx7cD4u73jiHjTo4PjkSEbWy7IkZBSg" />
    <title>RoCreator - Developer Website</title>
    <link rel="stylesheet" href="./app/assets/style/normalize.css">
    <link rel="stylesheet" href="./app/assets/style/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="./app/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./app/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./app/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./app/assets/img/favicon/site.webmanifest">
    <?php require_once("app/models/post.php"); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrap">
                <div class="header__logo">
                    <i class="fa-solid fa-cloud"></i>
                    <a class="logo" href="/">RoCreator</a>
                </div>
                <div class="header__menu">
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="/home">Home</a>
                        </li>
                        <li class="header__item sub-games">
                            <button class="opener">Games</button>
                            <ul class="header__lower__list">
                                <li class="header__lower__item">
                                    <a href="/games-roblox">Roblox</a>
                                </li>
                                <li class="header__lower__item">
                                    <a href="/games-android">Android</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header__item">
                            <a href="/software">Software</a>
                        </li>
                        <li class="header__item">
                            <a href="/contacts">Contacts</a>
                        </li>
                        <li class="header__item">
                            <a href="/privacy">Privacy</a>
                        </li>
                    </ul>
                    <div class="page__action">
                        <button type="button" class="page__theme"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>