<?php
// $fruits = ["a"=>"Apple","b"=>"Banana"];
// $arr=["c"=>"Harsh","b"=>"Aman"];
$color = ["black", "white"];
$fruits = ["apple", "grapes"];
// $new_array=array_merge($fruits,$arr,$color);
// $new_array=$fruits+$arr;
// $new_array=array_merge_recursive($fruits,$arr);
$new_array = array_combine($color, $fruits);

echo "<pre>";
print_r($new_array);
echo "</pre>";