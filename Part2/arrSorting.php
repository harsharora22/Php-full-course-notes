<?php
$arr = ["a", "e", "c", "d"];
// $arr=[1,2,3,4];
// sort($arr);
// rsort($arr);
$newArr = array_reverse($arr);
$marks =
    [
    "Name" => "Harsh",
    "Science" => 98,
    "SST" => 96,
    "Computer" => 99,
];
asort($marks);
echo "<pre>";
print_r($marks);
echo "<pre>";