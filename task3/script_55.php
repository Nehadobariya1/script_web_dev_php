<?php
$details=array("roll_no"=>1,
"name"=>"ABC",
"email"=>"abc@gmail.com",
"contact_no"=>9313127453);

$first_key=array_key_first($details);
$last_key=array_key_last($details);
print_r($first_key);
echo "<br>";
print_r($last_key);

?>