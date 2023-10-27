<?php
$fruits=array("mango","apple","watermelon","guavava");

$search="mango";

$found=array_search($search,$fruits);

if(in_array($search,$fruits)){
	echo "$search index found $found";
}
else{
	echo  "$search index not found $found";
}
?>