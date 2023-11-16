<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="JtEQNzTX0hiaDx7cD4u73jiHjTo4PjkSEbWy7IkZBSg" />
    <title>RoCreator - Developer Website</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="./app/assets/styles/normalize.css">
    <link rel="stylesheet" href="./app/assets/styles/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./app/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./app/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./app/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./app/assets/img/favicon/site.webmanifest">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__wrap">
                    <div class="header__logo">
                        <i class="fa-solid fa-cloud"></i>
                        <a class="logo" href="./home">RoCreator</a>
                    </div>
                    <div class="header__menu">
                        <div class="header__burger">
                            <span></span>
                        </div>
                        <ul class="header__list">
                            <li class="header__item">
                                <a href="./home">Home</a>
                            </li>
                            <li class="header__item sub-games">
                                <button class="opener">Games</button>
                                <ul class="header__lower__list">
                                    <li class="header__lower__item">
                                        <a href="./games-roblox">Roblox</a>
                                    </li>
                                    <li class="header__lower__item">
                                        <a href="./games-android">Android</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__item">
                                <a href="./software">Software</a>
                            </li>
                            <li class="header__item">
                                <a href="./privacy">Privacy</a>
                            </li>
                            <li class="header__item accent">
                                <a href="./contacts">Contacts</a>
                            </li>
                        </ul>
                        <div class="page__action">
                            <button type="button" class="page__theme"></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <?php include_once $requiredView; ?>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__wrap">
                    <p>All rights reserved by Bohdan Shcherbak,
                        <?php echo date("Y"); ?> Ukraine!
                    </p>
                    <div class="social-medias">
                        <a href="https://www.roblox.com/users/1412761211/profile" target="_blank" class="social-link">
                            <i class="fa-solid fa-r"></i>
                            <div class="hint">
                                Roblox
                            </div>
                        </a>
                        <a href="https://t.me/+voC6fujFeLE4ZDQy" target="_blank" class="social-link">
                            <i class="fa-brands fa-telegram"></i>
                            <div class="hint">
                                Telegram
                            </div>
                        </a>
                        <a href="https://www.instagram.com/bogsvity_777/" target="_blank" class="social-link">
                            <i class="fa-brands fa-instagram"></i>
                            <div class="hint">
                                Instagram
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="./app/assets/js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/daa76c24e2.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./app/assets/js/theme.js"></script>
    <script src="./app/assets/js/game-links.js"></script>
    <script src="./app/assets/js/header-links.js"></script>
    <script src="./app/assets/js/burger-menu.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>