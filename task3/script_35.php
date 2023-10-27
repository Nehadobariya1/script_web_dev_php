<?php
$num=array("a","b","c","d","e");
$shuffle=shuffle($num);
print_r($num);
foreach($num as $number){
	echo $number;
	echo ",";
}
?>