<?php
$a=array(array("name"=>"ripal", "Roll_no"=>1, "city"=>"rajkot"),
array("name"=>"neha", "Roll_no"=>2, "city"=>"rajkot"),
array("name"=>"krupali", "Roll_no"=>3,"city"=>"rajkot")
);

$column=array_column($a, "name");
print_r($column);
?>