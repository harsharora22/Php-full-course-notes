<?php
// $str = "Hy I am 'Harsh'";
$str = "Hy I am Harsh";
// $newStr = addslashes($str);
$newStr = addcslashes($str, "a..z");
echo stripslashes($newStr);
echo $newStr;