<?php  
$fruits = [
  "a"=>"Apple",
  "b"=>"Banana",
  "c"=>"Grapes",
];
// $keys=array_keys($fruits);
// $keys=array_key_first($fruits);
$keys=array_key_exists('c',$fruits);
if ($keys) {
  echo "Key exists";
}else{
  echo "Can't exists";
}
echo "<pre>";
print_r($keys);
echo "</pre>";
?>