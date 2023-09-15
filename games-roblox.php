<?php
require_once("model/post.php");
include("partials/header.php");
?>
<section class="about introducing">
    <div class="container">
        <div class="about__wrap">
            <div class="content">
                <h2>About our games on Roblox</h2>
                <img src="./assets/img/roblox-intro.jfif" alt="img">
                <p>I'm a roblox developer and I have an experience in creating Roblox games about 2 years. In this page
                    you can find all of my roblox games which I have ever made.</p>
                <a class="btn btn--more" href="#games">More</a>
            </div>
        </div>
    </div>
</section>
<section class="games" id="games">
    <div class="games__hero bg-color-block">
        <div class="container">
            <div class="introduction">
                <img src="./assets/img/roblox-intro.jpg" class="col-img" alt="img">
                <div class="content">
                    <h2>Our games in Roblox</h2>
                    <p>I've made a lot of games on Roblox which have lots of genres. All these game are
                        playeble on all kinds of devices only what you need it's Roblox. These games are
                        made on my own. So if you wanna try it you can click More</p>
                    <a class="btn btn--more" href="#roblox-games">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="games__wrap">
            <ul class="games__list" id="roblox-games">
                <?php
				$posts = Post::out(6, 0, "game", "Roblox");
				if (count($posts) > 0) {
					foreach ($posts as $post) {
						echo $post->renderHTML();
					}
				} else {
					echo "Sorry there're no games";
				}
				?>
            </ul>
        </div>
    </div>
</section>
<?php include("partials/footer.php"); ?>