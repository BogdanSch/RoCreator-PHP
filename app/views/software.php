<?php
require_once("model/post.php");
include("partials/header.php");
?>
<section class="about introducing">
    <div class="container">
        <div class="about__wrap">
            <div class="content">
                <h2>About my software</h2>
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="img">
                <p>I started my carrier on developing software for pc and android devices.
                    During my work I've made a lot of
                    useful programs which can make your life much easier and effective.</p>
                <a class="btn btn--more" href="#software">More</a>
            </div>
        </div>
    </div>
</section>
<section class="software" id="software">
    <div class="software__hero bg-color-block">
        <div class="container">
            <div class="introduction">
                <img src="https://images.unsplash.com/photo-1619410283995-43d9134e7656?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="col-img" alt="img">
                <div class="content">
                    <h2>My software for pc and android</h2>
                    <p>These are all my software for android and windows platforms which can be super useful
                        for you. It's all completely free!</p>
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
                    echo "Sorry, there're no software";
                }
                ?>
            </ul>
        </div>
    </div>
</section>
<?php include("partials/footer.php"); ?>