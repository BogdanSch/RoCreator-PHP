<?php
require_once("action.php");
include("page-parts/header.php");
?>
<section class="introducing bg-color">
	<div class="container">
		<div class="introducing__wrap">
			<div class="content">
				<h1>RoCreator</h1>
				<p>I'm a game, sites and sofware developer. To create my projects I use C#, Python, Lua, HTML +
					CSS + JS and Java.
					Follow me on this site to know more about me.
				</p>
				<a class="btn btn--more" href="#about">More</a>
			</div>
			<img src="img/image-intro.png" class="intro-img" alt="intro-img">
		</div>
	</div>
</section>
<section class="about" id="about">
	<div class="container">
		<div class="about__wrap">
			<div class="content">
				<h2>About us</h2>
				<img src="img/roblox-intro.jfif" alt="img">
				<p>I'm a middle game developer. I don't have a team but my games don't gonna be
					bad. I develop my games on roblox and Unity also I have my software for android and deckstop
					devices. Follow me on this site, if you wanna know more about me and my creations</p>
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
				$out = out(5, 0, "game", "Roblox");
				if (count($out) > 0) {
					foreach ($out as $row) {
						echo get_post_item($row, "game");
					}
				} else {
					echo "Sorry there're no games";
				}
				?>
				<a class="btn btn--more center-align" href="games-roblox.php">Get More</a>
			</ul>
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
					<p>These are our software for android and windows platforms which can be really useful
						for you!</p>
					<a class="btn btn--more" href="#pc-soft">More</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="software__wrap">
			<ul class="software__list" id="pc-soft">
				<?php
				$out = out(5, 0, "software", "all");
				if (count($out) > 0) {
					foreach ($out as $row) {
						echo get_post_item($row, "soft");
					}
				} else {
					echo "Sorry there's no software";
				}
				?>
				<a class="btn btn--more center-align" href="soft.php">Get More</a>
			</ul>
		</div>
	</div>
</section>
<?php include("page-parts/footer.php"); ?>