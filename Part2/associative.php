<?php
$arr = [
    "Ist" => "Harsh", // "Key"=>"Value",
    "2nd" => "Arora",
    "3rd" => "Khatri",
];
$arr["3rd"] = 12;
echo "<pre>";
// print_r($arr);
var_dump($arr);
echo "</pre>";

echo "<br>" . $arr["Ist"];