<?php
$str = "Hello World!";
// $newArr = str_split($str, 6);
$newArr = chunk_split($str, 1, '.');

echo "<pre>";
print_r($newArr);
echo "</pre>";