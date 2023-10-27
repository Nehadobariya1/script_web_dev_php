<?php
$a=array(50,20,30);
$b=array(80,30);
$difference=array_diff($a,$b);   //a-b
$difference1=array_diff($b,$a);   //b-a
print_r($difference);
echo "<br>";
print_r($difference1);
echo "<br>";
foreach($difference as $c){
	echo $c;
	echo "<br>";
}
echo "<br>";
foreach($difference1 as $d){
	echo $d;
	echo "<br>";
}
?>