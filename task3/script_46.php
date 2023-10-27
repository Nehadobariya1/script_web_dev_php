<?php


$value="hello world!";
$value1="PHP";
$fill=array_fill(0,4,$value);

$fill1=array_fill(0,4,$value1);
$merge=array_merge($fill, $fill1);
print_r($merge);
?>