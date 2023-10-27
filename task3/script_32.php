<?php
$num=array(1,2,3,4,5);
$int=array(11,12,13,14,15);

$merge=array_merge($num,$int);
foreach($merge as $combine){
	echo $combine;
	echo ",";
}

?>