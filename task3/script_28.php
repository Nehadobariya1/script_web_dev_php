<?php
$integers=array(15,2,23,27,6,5,0,1,7);
sort($integers);
print_r($integers);
echo "<br>";
foreach($integers as $integer){
	echo $integer;
	echo ",";
	
}

?>