<?php
$cities=array("tokyo", "paris", "new york", "bangkok", "sydney", "london");

echo "city i want to visit in future:";
echo "<br>";
foreach($cities as $index => $city){
echo($index + 1). " " . $city;
echo "<br>";
}
?>