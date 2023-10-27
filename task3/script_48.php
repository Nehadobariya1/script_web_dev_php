<?php

function value($a,$b){
	return($a . "-" . $b);
}
$c=array(2,3,4,5);
$reduce=array_reduce($c,"value");
print_r($reduce);
?>