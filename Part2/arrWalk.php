<?php

$marks =
    [
    "Name" => "Harsh",
    "Science" => 98,
    "SST" => 96,
    "Computer" => 99,
];
array_walk($marks, "myFunc", " is key & value is ");
function myFunc($value, $key, $param)
{
    echo "$key $param $value<br>";
}
// array_walk_recursive // it will only works on multidimensionalAssociativeArray