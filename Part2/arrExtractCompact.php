<?php
// $a="Violet";
// $color=["a"=>"Green","b"=>"Red","c"=>"Blue"];
// // extract($color,EXTR_OVERWRITE);
// extract($color,EXTR_SKIP);
// // extract($color,EXTR_PREFIX_SAME,"test");
// echo "Variable a is: $a<br>";
// echo "Variable a is: $test_a<br>";
// echo "Variable b is: $b<br>";
// echo "Variable c is: $c";

// compact

$fname = "Harsh";
$lname = "Arora";
$newArr = compact("fname", "lname");
echo "<pre>";
print_r($newArr);
echo "</pre>";