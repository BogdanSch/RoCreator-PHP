<?php
require_once("action.php");
include("page-parts/header.php");
?>
<section class="about introducing">
	<div class="container">
		<div class="about__wrap">
			<div class="content">
				<h2>About our games for Android</h2>
				<img src="img/android.jfif" alt="img">
				<p>I'm an android games developer. I made all of my games on Android studio. In this page you can find
					all of our games for android devices</p>
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
					<h2>Our games for Android</h2>
					<p>I haven't made many games for android. These are all of our games which I have ever made on our
						website. You can download them fast and for free. </p>
					<a class="btn btn--more" href="#android-games">More</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="games__wrap">
			<ul class="games__list" id="android-games">
				<?php
				$out = out(5, 0, "game", "Android");
				if (count($out) > 0) {
					foreach ($out as $row) {
						echo get_post_item($row);
					}
				} else {
					echo "Sorry there're no games";
				}
				?>
			</ul>
		</div>
	</div>
</section>

<?php include("page-parts/footer.php"); ?>