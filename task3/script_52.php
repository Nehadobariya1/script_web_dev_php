<?php
$int=array(1,2,3,4,5,6,7);
$float=array(1.1,2.3,4.5,6.7);
$merge=array_merge($int,$float);
print_r($merge);
echo "<br>";
foreach($merge as $result){
	echo $result;
	echo ",";
}

?>