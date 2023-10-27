<?php
$a=array(1,2,3,4,5,6,7,8);
$b=array(2,4,6,8);
$intersection=array_intersect($a,$b);
print_r($intersection);
echo "<br>";
foreach($intersection as $a){
	echo $a;
	echo "<br>";
	
}

?>