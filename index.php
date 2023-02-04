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
			<img src="img/image1 1.png" class="intro-img" alt="intro-img">
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
						echo get_post_item($row, "games");
					}
				} else {
					echo "Sorry there're no games";
				}
				?>
				<a class="btn btn--more center-align" href="games-roblox.html">Get More</a>
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
						echo get_post_item($row, "software");
					}
				} else {
					echo "Sorry there's no software";
				}
				?>
				<li class="software__item card">
					<img src="img/image3 1.png" class="software__img" alt="calc-pc">
					<div class="description">
						<div class="text">
							<h5>Calculator for pc</h5>
							<p>This is an important thing ever. This calculator has a nice design and can do all
								operations what you need. Made for windows devices. It doesn't have any virus</p>
						</div>
						<div class="type">
							<span>Type: </span> deckstop
						</div>
						<a href="#" class="btn--play">Get</a>
					</div>
					<img class="bg--img" src="img/background.png" alt="bg">
				</li>
				<li class="software__item card">
					<img src="img/image4.png" alt="calc-android" class="software__img">
					<div class="description">
						<div class="text">
							<h5>Calculator for android</h5>
							<p>This is an important thing ever. This calculator has a nice design and can do all
								operations what you need. Made for android devices. It doesn't have any virus</p>
						</div>
						<div class="type">
							<span>Type: </span> android
						</div>
						<button class="btn--play unfinished">Get</button>
					</div>
					<img class="bg--img" src="img/background (2).png" alt="bg">
				</li>
				<a class="btn btn--more center-align" href="soft.html">Get More</a>
			</ul>
		</div>
	</div>
</section>
<?php include("page-parts/footer.php"); ?>