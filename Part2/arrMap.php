<?php
$arr = ["Harsh", "Aman", "Komal"];
$num = [1, 2, 3];
$newArr = array_map("func", $arr, $num);
function func($param, $int)
{
    return [$int => $param];
}
echo "<pre>";
print_r($newArr);
echo "</pre>";