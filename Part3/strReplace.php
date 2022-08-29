<?php
$str = "Hello World! How are all";
$find = ["hello", "all"];
$rep = ["Hey", "You"];
echo str_ireplace($find, $rep, $str);