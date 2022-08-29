<?php
// $str = "PHP regular phhhhp web expressions";
// $str = "jann january";
$str = "file.jpg bg.png";
// $num = '1238 945 364';
// $exp = preg_match_all("/php|web/i", $str, $arr); // "/[^pw]/i" ^means not, "/[a-z]/","/[a-zA-Z]/","/[0-9]/" <- we can also use like this
// if ($exp) {
//     echo "Found.";
// } else {
//     echo "Not Found.";
// }
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// echo $arr[0][2];

// $regExp = preg_match_all("/ph*/i", $str, $arr);
// $regExp = preg_match_all("/\d*/", $num, $arr); #/\d+/
// $regExp = preg_match_all("/regu?ular/", $str, $arr);
// $regExp = preg_match_all("/jan(uary)?/", $str, $arr);
// $regExp = preg_match_all("/jan{2}/", $str, $arr); #/jan{2,}/ kam se kam 2 & /jan{2,5}/ 2 se lekar 5 tak
$regExp = preg_match_all("/\w*\.(jpg|png)/", $str, $arr);
echo "<pre>";
print_r($arr);
echo "</pre>";