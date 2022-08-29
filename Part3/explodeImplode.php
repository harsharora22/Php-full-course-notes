<?php
$str = "Hello my name is Harsh";
$arr = ["Hello", "my", "name", "is", "Harsh"];
// $newArr = explode(" ", $str, 3);
$str = implode(" ", $arr);
echo $str;
// echo "<pre>";
// print_r($newArr);
// echo "</pre>";