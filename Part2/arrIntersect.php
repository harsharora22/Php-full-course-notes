<?php  
function compareFunc($arr1,$arr2){
  if ($arr1===$arr2) {
    return 0;
  }
  return ($arr1>$arr2)?1:-1;
}
$arr1=["a"=>"red","b"=>"purple","c"=>"violet"];
$arr2=["a"=>"red","d"=>"purple","e"=>"blue"];
// $newArr=array_intersect($arr1,$arr2); // match value
// $newArr=array_intersect_key($arr1,$arr2); // match key
// $newArr=array_intersect_assoc($arr1,$arr2); // match both
$newArr=array_intersect_uassoc($arr1,$arr2,"compareFunc"); // call the define func
echo "<pre>";
print_r($newArr);
echo "</pre>";
?>