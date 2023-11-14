<?php
include("app/partials/header.php");
?>
<section class="introducing bg-color">
    <div class="container">
        <div class="introducing__wrap">
            <div class="content">
                <h1>RoCreator</h1>
                <p>I'm a games, websites and sofware developer. To create and develop all my projects I use C#, Python,
                    Lua, HTML + CSS + JS + PHP and Java programming languages.
                    Follow me on this site to get know more about me.
                </p>
                <a class="btn btn--more" href="#about">More</a>
            </div>
            <img src="./app/assets/img/image-intro.png" class="intro-img" alt="intro image">
        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="about__wrap">
            <div class="content">
                <h2>About me</h2>
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="img">
                <p>I'm a middle developer. I don't have a team yet but the quality of my projects doesn't suffer from
                    that. I develop all my project on Roblox and Unity and Wordpress too, also I have my software for
                    android and desktop devices. Follow me on this site, if you wanna know more about me and my
                    projects.</p>
                <a class="btn btn--more" href="#games">More</a>
            </div>
        </div>
    </div>
</section>
<section class="games" id="games">
    <div class="games__hero bg-color-block">
        <div class="container">
            <div class="introduction">
                <img src="./app/assets/img/roblox-intro.jpg" class="col-img" alt="img">
                <div class="content">
                    <h2>My games on Roblox</h2>
                    <p>I've created a bunch of fun games on Roblox over time, spanning various genres. The best part?
                        You can play them on any device as long as you have Roblox installed.
                        These games are my own creations, and I'd love for you to give them a try! Just click 'More' to
                        start your gaming adventure.</p>
                    <a class="btn btn--more" href="#roblox-games">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="games__wrap">
            <ul class="games__list" id="roblox-games">
                <?php
                $posts = Post::out(4, 0, "game", "Roblox");
                if (count($posts) > 0) {
                    foreach ($posts as $post) {
                        echo $post->renderHTML();
                    }
                } else {
                    echo "Sorry, there're no games";
                }
                ?>
                <a class="btn btn--more center-align" href="./games-roblox.php">Get More</a>
            </ul>
        </div>
    </div>
</section>
<section class="software" id="software">
    <div class="software__hero bg-color-block">
        <div class="container">
            <div class="introduction">
                <img src="./app/assets/img/roblox-intro.jpg" class="col-img" alt="img">
                <div class="content">
                    <h2>My software for pc and android</h2>
                    <p>These are my software for android and windows platforms which can be really useful
                        for you!</p>
                    <a class="btn btn--more" href="#pc-soft">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="software__wrap">
            <ul class="software__list" id="pc-soft">
                <?php
                $posts = Post::out(4, 0, "software", "all");
                if (count($posts) > 0) {
                    foreach ($posts as $post) {
                        echo $post->renderHTML("software");
                    }
                } else {
                    echo "Sorry, there're no software";
                }
                ?>
                <a class="btn btn--more center-align" href="./software.php">Get More</a>
            </ul>
        </div>
    </div>
</section>
<?php include("app/partials/footer.php"); ?>