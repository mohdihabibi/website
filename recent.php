<?php
	echo "The last five products that were visited are:<br />\n";
	$counter = 1;
	foreach($_COOKIE as $key => $value){
		echo $counter." ".$key."<br />\n";
		$counter++;
		if ($counter == 6)
			break;
	}
?>