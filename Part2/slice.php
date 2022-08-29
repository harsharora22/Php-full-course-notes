<?php
$fruits = ["Apple", "Grapes", "Mangos", "Banana"];
$newarr = array_slice($fruits, -2, 2, true);
// $fruits = ["a" => "Apple", "b" => "Banana"];
// $newarr = array_slice($fruits, 1, 1, true);

echo "<pre>";
print_r($newarr);
echo "</pre>";