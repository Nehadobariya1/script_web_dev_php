<?Php
$string = "hello world";
$count = 0;
for($i=0;$i<=strlen($string);$i++)
{
if($string[$i] == 'a' || $string[$i] == 'i' || $string[$i] == 'o' || $string[$i] == 'u' || $string[$i] == 'e') 
{
  $count += $string;
  $string++;
}
}
echo "count is: $count";
?>