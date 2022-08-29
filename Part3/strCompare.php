<?php
$str1 = "This is string 1";
$str2 = "This is string 1";
// echo strcmp($str1, $str2);
// echo strncmp($str1, $str2, 4);
echo strcasecmp($str1, $str2);
echo strnatcmp($str1, $str2);
echo substr_compare($str1, $str2, 0, 5, true);
// echo similar_text($str1, $str2, $per);
// echo 'Percentage is' . $per;