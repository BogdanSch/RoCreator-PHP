<?php
require_once("model/post.php");
include("page-parts/header.php");
?>
<section class="about introducing">
    <div class="container">
        <div class="about__wrap">
            <div class="content">
                <h2>About our software</h2>
                <img src="https://compass-ssl.xbox.com/assets/cd/14/cd14239c-655d-42bc-bbfd-af506f107f8c.jpg?n=Roblox_Gallery-0_1350x759_04.jpg"
                    alt="img">
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
                <img src="https://compass-ssl.xbox.com/assets/cd/14/cd14239c-655d-42bc-bbfd-af506f107f8c.jpg?n=Roblox_Gallery-0_1350x759_04.jpg"
                    class="col-img" alt="img">
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
<?php include("page-parts/footer.php"); ?>