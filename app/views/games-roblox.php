<section class="about introducing" data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="about__wrap">
            <div class="about__content">
                <h2>About my games on Roblox</h2>
                <img src="./app/assets/img/roblox-intro.jfif" alt="img">
                <p>I'm a Roblox developer and I have been creating my fascinating Roblox games for about 2,5 years. On
                    this page, you will find all of the Roblox projects I have ever made.</p>
                <a class="btn btn--more" href="#games">More</a>
            </div>
        </div>
    </div>
</section>
<section class="games" id="games">
    <div class="games__hero bg-color-block" data-aos="fade-down" data-aos-duration="2000">
        <div class="container">
            <div class="introduction">
                <img src="./app/assets/img/roblox-intro.jpg" class="col-img" alt="Roblox Games Intro Image">
                <div class="content">
                    <h2>My games on Roblox</h2>
                    <p>I've made a lot of games on Roblox which have lots of genres. All these games are playable on all
                        kinds of devices only what you need is Roblox Launcher. These games are made by myself. So, if
                        you wanna check them out, you can click More and support me on Roblox.
                    </p>
                    <div class="center-align">
                        <a class="btn btn--more" href="#roblox-games">More</a>
                    </div>
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
                    echo "Sorry, there're no games";
                }
                ?>
            </ul>
        </div>
    </div>
</section>