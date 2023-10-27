<?php
$details=array("roll_no"=>1,
"name"=>"ABC",
"email"=>"abc@gmail.com",
"contact_no"=>9313127453);

$flip=array_flip($details);
print_r($flip);
echo "<br>";


/*
foreach($details as $flip){
	echo $flip;
	echo "<br>";
}*/
?>