<?php
$num=array(1,2,3,4,5);
$a=2;

if(array_key_exists($a,$num)){
	unset($num[$a]);
}
print_r($num);

?>