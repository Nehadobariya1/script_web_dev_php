<?php
$details=array(
				"name"=>"nirali",
				"age"=> 20,
				"email"=>"nmd@gmail.com");
$a="email";
if(array_key_exists($a,$details)){
	unset($details[$a]);
}

print_r($details);
?>