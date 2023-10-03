<?php
require_once("model/post.php");
include("partials/header.php");
?>
<section class="about introducing">
    <div class="container">
        <div class="about__wrap">
            <div class="content">
                <h2>About my games for Android</h2>
                <img src="./assets/img/android.jfif" alt="img">
                <p>I'm an android games developer. I made all of my games in Android Dtudio. In this page you can find
                    all of our games for android devices.</p>
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
                    <h2>My games for Android</h2>
                    <p>I haven't made many games for android. These are all of the games which I have ever made and you
                        check out them all on my website. You can download them fast and for free. </p>
                    <a class="btn btn--more" href="#android-games">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="games__wrap">
            <ul class="games__list" id="android-games">
                <?php
				$posts = Post::out(6, 0, "game", "Android");
				if (count($posts) > 0) {
					foreach ($posts as $post) {
						echo $post->renderHTML();
					}
				} else {
					echo "Sorry, there're no games";
				}
				?>
            </ul>
        </div>
    </div>
</section>
<?php include("partials/footer.php"); ?>