<?php
$arr1 = ["a" => "red", "b" => "purple", "c" => "violet"];
$arr2 = ["a" => "red", "d" => "purple", "e" => "blue"];
$newArr = array_diff($arr1, $arr2);
echo "<pre>";
print_r($newArr);
echo "</pre>";