<?php

$details=array("roll_no"=>1,
"name"=>"ABC",
"email"=>"abc@gmail.com",
"contact_no"=>9313127453);

$key=array_keys($details);
print_r($key);
echo "<br>";
foreach($key as $keys){
	echo $keys;
	echo "<br>";
}

?>