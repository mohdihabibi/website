<?php

	$db = mysqli_connect("localhost", "softwby8", "Meh2Fere@1", "softwby8_newdb");
 
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$query = "SELECT * FROM user";
if($result = mysqli_query($db, $query)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                echo $row['first_name'];
                echo " ".$row['last_name'] . "</br>";
        }

        mysqli_free_result($result);
    } 
}

mysqli_close($db);

?>
