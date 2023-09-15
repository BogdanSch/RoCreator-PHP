<?php
require_once("model/post.php");
include("page-parts/header.php");
?>
<section class="introducing bg-color">
    <div class="container">
        <div class="introducing__wrap">
            <div class="content">
                <h1>RoCreator</h1>
                <p>I'm a game, websites and sofware developer. To create all of my projects I use C#, Python, Lua, HTML
                    + CSS + JS + PHP and Java.
                    Follow me on this site to get know more about me.
                </p>
                <a class="btn btn--more" href="#about">More</a>
            </div>
            <img src="img/image-intro.png" class="intro-img" alt="intro image">
        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="about__wrap">
            <div class="content">
                <h2>About me</h2>
                <img src="img/roblox-intro.jfif" alt="img">
                <p>I'm a middle developer. I don't have a team yet but the quality of my projects doesn't suffer from
                    that. I
                    develop my
                    project on Roblox and Unity and Wordpress too, also I have my software for android and desktop
                    devices. Follow me on this site, if you wanna know more about me and my projects.</p>
                <a class="btn btn--more" href="#games">More</a>
            </div>
        </div>
    </div>
</section>
<section class="games" id="games">
    <div class="games__hero bg-color-block">
        <div class="container">
            <div class="introduction">
                <img src="https://compass-ssl.xbox.com/assets/cd/14/cd14239c-655d-42bc-bbfd-af506f107f8c.jpg?n=Roblox_Gallery-0_1350x759_04.jpg"
                    class="col-img" alt="img">
                <div class="content">
                    <h2>My games in Roblox</h2>
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
					echo "Sorry there're no games";
				}
				?>
                <a class="btn btn--more center-align" href="games-roblox.php">Get More</a>
            </ul>
        </div>
    </div>
</section>
<section class="software" id="software">
    <div class="software__hero bg-color-block">
        <div class="container">
            <div class="introduction">
                <img src="https://compass-ssl.xbox.com/assets/cd/14/cd14239c-655d-42bc-bbfd-af506f107f8c.jpg?n=Roblox_Gallery-0_1350x759_04.jpg"
                    class="col-img" alt="img">
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
					echo "Sorry there're no software";
				}
				?>
                <a class="btn btn--more center-align" href="soft.php">Get More</a>
            </ul>
        </div>
    </div>
</section>
<?php include("page-parts/footer.php"); ?>