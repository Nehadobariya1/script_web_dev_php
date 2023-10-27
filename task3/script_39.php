<?php
$name=array("krupali","neha","vishakha","parth","darshil","ripal");
$start=0;
$length=3;
$slice=array_slice($name, $start, $length);
print_r($name);
echo"<br>";
print_r($slice);
echo"<br>";
foreach($slice as $result){
	echo $result. ",";
}



?>