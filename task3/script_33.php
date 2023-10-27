<?php
$colors=array("color1"=>"pink",
"color2"=>"black",
"color3"=>"blue");
$check="color4";
if(array_key_exists($check,$colors)){
	echo "$check exists";
}
else{
	echo "$check not exists";
}

?>