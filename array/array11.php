<?php
$fruits=array("apple", "mango");
$vegetables=array("tomato", "chilli");
$merge=array_merge($fruits, $vegetables );

print_r($merge);
echo "<br>";
foreach($merge as $combo){
	echo $combo. " ";
	
}

?>