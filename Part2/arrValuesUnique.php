<?php
$arr = ["a" => "red", "b" => "purple", "c" => "violet", "d" => "purple"];
$newArr = array_unique($arr);

echo "<pre>";
print_r($newArr);
echo "</pre>";