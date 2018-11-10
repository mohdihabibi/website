<?php
	$key = "shoes";
	if(isset($_COOKIE[$key])) {
		$temp = $_COOKIE[$key];
		$temp++;
		setcookie($key, $temp);
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
	<div id = "shoes">
		<div><img src = "shoes.jpg"></img></div>
		<div id = "item-text">206 Collective Men's Barnes Suede Casual Oxford</div>
	</div>
</body> 
<script type="text/javascript" src="code.js"></script>
</html>