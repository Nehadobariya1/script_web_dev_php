<?php
function sum($a){
	return($a*$a);
}
$b=array(2,3,4,5);
$map=array_map("sum",$b);
print_r($map);

?>