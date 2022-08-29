<?php  
$str="Hello World";
// $newStr=strtoupper($str);
// $newStr=strtolower($str);
// $newStr=lcfirst($str);
// $newStr=ucfirst($str);
$newStr=ucwords($str);
echo "<pre>";
print_r($newStr);
echo "</pre>";

?>