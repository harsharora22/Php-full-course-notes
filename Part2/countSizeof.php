<?php
// array count sizeof
$food = ["Jalebi", "Pizza", "Burger", "Jalebi"];
// echo count($food);
// $len = sizeof($food);
// for ($i = 0; $i < $len; $i++) {
//     echo $food[$i] . "<br>";
// }
echo "<pre>";
print_r(array_count_values($food));
echo "<pre>";

$food = [
    "1" => ["Jalebi", "samosa"],
    "2" => ["Pizza", "Sandwitch"],
    "3" => ["Burger", "Mojito"],
];
echo count($food["2"], 1);