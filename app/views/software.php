<section class="about introducing" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="about__wrap">
            <div class="about__content">
                <h2>About my software</h2>
                <img src="./app/assets/img/photo-laptops.avif" alt="About My Software Picture">
                <p>I started my carrier on developing software for pc and android devices.
                    During my work I've made a lot of
                    useful programs which can make your life much easier and effective.</p>
                <a class="btn btn--more" href="#software">More</a>
            </div>
        </div>
    </div>
</section>
<section class="software" id="software">
    <div class="software__hero bg-color-block" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="introduction">
                <img src="./app/assets/img/coding-screen.avif" class="col-img" alt="My software for pc and android">
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