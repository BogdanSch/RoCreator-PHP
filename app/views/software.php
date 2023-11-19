<section class="about introducing" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="about__wrap">
            <div class="about__content">
                <h2>About my software</h2>
                <img src="./app/assets/img/photo-laptops.avif" alt="About My Software Picture">
                <p>I started my career developing software for PC, Web and Android devices. During my work, I've made a
                    lot
                    of useful programs which can make your life much easier and more effective.</p>
                <a class="btn btn--more" href="#software">More</a>
            </div>
        </div>
    </div>
</section>
<section class="software" id="software">
    <div class="software__hero bg-color-block" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="introduction">
                <img src="./app/assets/img/coding-screen.avif" class="col-img"
                    alt="My software for PC, Web and Android">
                <div class="content">
                    <h2>My software for PC, Web and Android</h2>
                    <p>
                        Explore my collection of awesome software designed for both Android and Windows platforms –
                        there's something for everyone! These applications are not only super useful but also entirely
                        free. Dive into the world of user-friendly tools that enhance your Android and Windows
                        experience. From utilities to entertainment, I've got you covered! Enjoy the benefits of quality
                        software without spending a dime.</p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#pc-software">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="software__wrap">
            <ul class="software__list" id="pc-software">
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