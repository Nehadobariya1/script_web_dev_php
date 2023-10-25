<?php
$cities=array("tokyo", "paris", "new york", "bangkok", "sydney", "london");
rsort($cities);
foreach($cities as $city){
	echo $city;
	echo "<br>";
}
	
?>