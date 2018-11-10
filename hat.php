<?php
	$key = "hat";
	if(isset($_COOKIE[$key])) {
		$temp = $_COOKIE[$key];
		$temp++;
		setcookie($key, $temp, time() + 3600);
	  } else {
		setcookie($key, 1);
	  }
?>
<!DOCTYPE html>

<html>
<head>
	<title>Road Scanner</title>
	<link rel="stylesheet" href="styles.css" /> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    
</head>
<body>
	<div id = "hat">
		<div><img src = "hat.jpg"></img></div>
		<div id = "item-text">MONTIQUE Long Lasting Wide Brim 2 7/8 Wool Felt Dress Hat for Men H61</div>
	</div>
</body> 
<script type="text/javascript" src="code.js"></script>
</html>