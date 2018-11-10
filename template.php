<!DOCTYPE html>
<html>
<head>
	<title>Road Scanner</title>
	<link rel="stylesheet" href="styles.css" /> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    
</head>
<body>
	<div id = "menu-bar">
		<div id = "home-button" class = "button">
			<i class="fa fa-home"></i>
			<div class="text">Home</div>
		</div>
		
		<div id = "about-button" class="button">
			<i class="fa fa-info"></i>
			<div class="text">About</div>
		</div>
		
		<div id = "product-button" class="button">
			<i class="fa fa-product-hunt"></i>
			<div class="text">Product and Services</div>
		</div>
		
		<div id = "news-button" class="button">
			<i class="fa fa-newspaper"></i>
			<div class="text">News</div>
		</div>
		
		<div id = "contacts-button" class="button">
			<i class = "fa fa-phone"></i>
			<div class="text">Contact Us</div>
		</div>

		<div id = "admin-button" class= "button">
			<i class="fa fa-user"></i>
			<div class = "text">Admin</div>
		</div>
	</div>
	<div id = "home" class="screen">
		<div class="note">
			<?php
				$myhomefile = fopen("home.txt", "r") or die("Unable to open file!");
				echo fread($myhomefile,filesize("home.txt"));
				fclose($myhomefile);
			?>
		</div>
	</div>
	<div id = "about" class="screen">
		<div class="note">
			<?php
				$myhomefile = fopen("about.txt", "r") or die("Unable to open file!");
				echo fread($myhomefile,filesize("about.txt"));
				fclose($myhomefile);
			?>
		</div>
	</div>
	<div id = "product" class="screen">
		<!-- <img src="services.jpg"> -->
		<div id = "products">
			<a href="./recent.php">Most recent</a>
			<a href="./visited.php">Most visited</a>
			<div class = 'row'>
				<a href="./pants.php">Pants</a>
				<a href="./shirt.php">Shirt</a>
				<a href="./shoes.php">Shoes</a>
				<a href="./dress.php">Dress</a>
				<a href="./backpack.php">Backpack</a>
			</div>
			<div class = 'row'>
				<a href="./hat.php">Hat</a>
				<a href="./scarf.php">Scarf</a>
				<a href="./short.php">Short</a>
				<a href="./pajama.php">Pajama</a>
				<a href="./handbag.php">Handbag</a>
			</div>
		</div>
	</div>
	<div id = "news" class="screen">
		<div class="note">
			<?php
				$myhomefile = fopen("news.txt", "r") or die("Unable to open file!");
				echo fread($myhomefile,filesize("news.txt"));
				fclose($myhomefile);
			?>
		</div>
		
	</div>
	<div id = "contacts" class = "screen">
		<div class="note">
			<?php
				$myhomefile = fopen("contacts.txt", "r") or die("Unable to open file!");
				echo fread($myhomefile,filesize("contacts.txt"));
				fclose($myhomefile);
			?>
		</div>
	</div>
	<div id = "admin" class = "screen">
		<form>
			Username:<br>
			<input id = "username" type = "text"> <br>
			Password:<br>
			<input id = "password" type = "text"><br>
			<!-- <input id = "submit" type = "submit"><br> -->
		</form>
		<button id = "submit">Click Me!</button>
		<div id = "secure" display = None>
			Current Users:<br>
			<?php
				$myhomefile = fopen("users.txt", "r") or die("Unable to open file!");
				echo fread($myhomefile,filesize("users.txt"));
				fclose($myhomefile);
			?>
		</div>
		<div id = "wrong-pass"></div>
	</div>
	<!-- <div id = "secure-field" class = "screen"> -->
		<!-- secure -->
		<!-- <div id = "users">
			Current Users:<br>
			<?php
				$myhomefile = fopen("users.txt", "r") or die("Unable to open file!");
				echo fread($myhomefile,filesize("users.txt"));
				fclose($myhomefile);
			?>
		</div> -->
	<!-- </div> -->
</body> 
<script type="text/javascript" src="code.js"></script>
</html>