<?php
/*$num=array(1,2,3,4,5,6,7,8,9,10);
$remove=5;
$length=2;
$splice=array_splice($num,$remove,$length);
print_r($num);*/

echo"<br>";
$num1=array(1,2,3,4,5,6,7,8,9,10);
$replace=["a"];
$remove=5;
$length=1;
$splice=array_splice($num1,$remove,$length,$replace);
print_r($num1);



?>