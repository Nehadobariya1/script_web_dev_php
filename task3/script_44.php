<?php

$details=array("roll_no"=>1,
"name"=>"ABC",
"email"=>"abc@gmail.com",
"contact_no"=>9313127453);

$value=array_values($details);
print_r($value);
echo "<br>";
foreach($value as $values){
	echo $values;
	echo "<br>";
}

?>