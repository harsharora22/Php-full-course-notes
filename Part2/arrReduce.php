<?php
$arr = ["Harsh", "Aman", "Komal"];

$newArr = array_reduce($arr, 'func', 'Simar');
function func($n, $m)
{
    return $n . '-' . $m;
}
echo "<pre>";
print_r($newArr);
echo "</pre>";

$num = [1, 2, 3];