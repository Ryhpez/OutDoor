<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Outdoor Clothing | Hem </title>
	<link rel="icon" href="img/pagecontent/favicon.png">
    <link href="styles/index.css" rel="stylesheet">
    <link href="styles/items.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/fontawesome.js"></script>
</head>

<body>
	<script>
	$(document).ready(function(){
		$('.dropDown').hover(function(){
			$('.featured').stop().animate({marginTop: '10%'});
		}, function(){
			$('.featured').stop().animate({marginTop: '5%', display: 'none'})
		});
	});
	</script>
	<header>
		<div class="topSection">
		<i class="fa fa-shopping-cart cart" aria-hidden="true"></i>
		<img src="img/pagecontent/logo.png" class="logoTop" alt="logoTop">
		<button class="myAccount"><a href="sites/server-site/sign.php">Mitt konto</a></button>
		</div>
		<div class="sectionSeparator"></div>
		<div class="bottomSection">
			<nav class="topNavigation">
				<ul>
					<li><a href="">Hem</a></li>
					<li class="dropDown"><a href="#">Produkter</a>
						<ul class="dropDownContent">
							<div class="sectionSeparatorDrop"></div>
							<li><a href="sites/products/jackor.html">Jackor</a></li>
							<li><a href="sites/products/trojor.html">Tröjor</a></li>
							<li><a href="sites/products/tshirt.html">T-Shirts</a></li>
							<li><a href="sites/products/byxor.html">Byxor</a></li>
							<li><a href="sites/products/keps.html">Kepsar</a></li>
						</ul>
					</li>
					<li><a href="sites/leverans.html">Leverans</a></li>
					<li><a href="sites/kontakta.html">Kontakta oss</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
	<section class="featured">
		<h1 class="welcome">
			Välkommen till Outdoor clothing!
		</h1>
		<p class="intro">
			Här är Månadens Populäraste Produkter
		</p>
	</section>
		<div class="container">
			<div class="item">
				<img src="img/trojor/troja1.jpg" class="itemImage" alt="troja01">
				<span class="itemDescription">
					<br>
					100% Polyster
					<br>
				</span>
				<span class="itemPrice">
					499 kr <span class="moms">Inkl. moms</span>
					<br>
				</span>
				<div class="selectSize">
					<select>
						<option value="S">S</option>
						<option value="M">M</option>
						<option value="L">L</option>
					</select>
				</div>
				<button class="itemBuy">HANDLA</button>
			</div>
			<div class="item">
				<img src="img/trojor/troja1.jpg" class="itemImage" alt="troja01">
				<span class="itemDescription">
					<br>
					100% Polyster
					<br>
				</span>
				<span class="itemPrice">
					499 kr <span class="moms">Inkl. moms</span>
					<br>
				</span>
				<div class="selectSize">
					<select>
						<option value="S">S</option>
						<option value="M">M</option>
						<option value="L">L</option>
					</select>
				</div>
				<button class="itemBuy">HANDLA</button>
			</div>
			<div class="item">
				<img src="img/trojor/troja1.jpg" class="itemImage" alt="troja01">
				<span class="itemDescription">
					<br>
					100% Polyster
					<br>
				</span>
				<span class="itemPrice">
					499 kr <span class="moms">Inkl. moms</span>
					<br>
				</span>
				<div class="selectSize">
					<select>
						<option value="S">S</option>
						<option value="M">M</option>
						<option value="L">L</option>
					</select>
				</div>
				<button class="itemBuy">HANDLA</button>
			</div>
		</div>
	</main>
	<footer>
		<div class="topSection">
			<nav class="bottomNavigation">
				<ul>
					<li><a href="sites/products/jackor.html">Jackor</a></li>
					<li><a href="sites/products/trojor.html">Tröjor</a></li>
					<li><a href="sites/products/tshirt.html">T-Shirts</a></li>
					<li><a href="sites/products/byxor.html">Byxor</a></li>
					<li><a href="sites/products/keps.hmtl">Kepsar</a></li>
				</ul>
			</nav>
		</div>
		<div class="sectionSeparator"></div>
		<div class="bottomSection">
			<ul class="socialIcons">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
			</ul>
			<p class="copyright">Outdoor clothing © 2017</p>
		</div>
	</footer>
</body>

</html>
