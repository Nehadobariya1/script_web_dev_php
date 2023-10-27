<?php
$char=array("a","b","c","d","e");
$reverse=array_reverse($char);
print_r($reverse);
echo "<br>";

foreach($reverse as $a){
	
	echo $a;
	echo ",";
}


?>