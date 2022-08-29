<?php
// $str = "Php is best scripting language in the world";
$str = "https://addpunch.com/home";
// echo preg_replace("/php/i", "Javascript", $str);
// $arr = preg_split("/[\s]+/", $str, 3);
$arr = preg_split("/\/\//", $str, -1, PREG_SPLIT_NO_EMPTY);
echo "<pre>";
print_r($arr);
echo "</pre>";