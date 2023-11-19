<section class="about introducing" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="about__wrap">
            <div class="about__content">
                <h2>About my games for Android</h2>
                <img src="./app/assets/img/android-device.jpg" alt="img">
                <p>
                    Hello there! I create fun games and useful software for Android devices. I use cool tools like
                    Android Studio and Unity to bring these apps to life. On this page, you can check out all the
                    awesome games I've made for Android devices. Enjoy exploring!</p>
                <a class="btn btn--more" href="#games">More</a>
            </div>
        </div>
    </div>
</section>
<section class="games" id="games">
    <div class="games__hero bg-color-block" data-aos="fade-down" data-aos-duration="2000">
        <div class="container">
            <div class="introduction">
                <img src="./app/assets/img/image-phone-game.avif" class="col-img" alt="Phone Game Image">
                <div class="content">
                    <h2>My games for Android</h2>
                    <p>I haven't made many games for android. These are all of the games which I have ever made and you
                        check out them all on my website. You can download them fast and for free.
                    </p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#android-games">More</a>
                    </div>
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