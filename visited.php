<?php
	echo "The 5 most visited product:<br />\n";
	$array = $_COOKIE;
	arsort($array);
	$counter = 0;
	foreach($array as $key => $value){
		echo $key." ".$value."<br />\n";
		$counter++;
		if ($counter == 5)
			break;
	}
?>