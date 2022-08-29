<?php  
$a = 23;
// var_dump(is_int($a)); // is_long is_integer are same
// var_dump(is_float($a)); // is_double is_real are same
// var_dump(is_numeric($a)); // in numeric it will be int or float values
// var_dump(is_string($a));
// var_dump(is_bool($a));
// var_dump(is_null($a));
// var_dump(is_array($a));
// var_dump(is_countable($a));
var_dump(is_scalar($a)); // check integer float and boolean value

#function test(){
#}
#Zvar_dump(is_callable('test'));

?>