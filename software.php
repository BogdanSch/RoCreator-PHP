<?php
require_once("model/post.php");
include("partials/header.php");
?>
<section class="about introducing">
    <div class="container">
        <div class="about__wrap">
            <div class="content">
                <h2>About our software</h2>
                <img src="./assets/img/roblox-intro.jpg" alt="img">
                <p>I started my carrier on developing software for pc and android. During my work I've made a lot of
                    useful programs which can make your life easier</p>
                <a class="btn btn--more" href="#software">More</a>
            </div>
        </div>
    </div>
</section>
<section class="software" id="software">
    <div class="software__hero bg-color-block">
        <div class="container">
            <div class="introduction">
                <img src="./assets/img/roblox-intro.jpg" class="col-img" alt="img">
                <div class="content">
                    <h2>Our software for pc and android</h2>
                    <p>These are all our software for android and windows platforms which can be super useful
                        for you. It's all free!</p>
                    <a class="btn btn--more" href="#pc-soft">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="software__wrap">
            <ul class="software__list" id="pc-soft">
                <?php
                $posts = Post::out(6, 0, "software", "all");
                if (count($posts) > 0) {
                    foreach ($posts as $post) {
                        echo $post->renderHTML("software");
                    }
                } else {
                    echo "Sorry there're no software";
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<?php include("partials/footer.php"); ?>