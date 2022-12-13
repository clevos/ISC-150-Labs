<?php
// Initilize counter
$i = 0;
while ($i < 150) {
	$i++;
	if($i%3){
	   continue; 
    }
    echo $i."<br>";
}
?>