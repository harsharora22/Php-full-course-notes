<?php
$fruits = ["Apple", "Grapes", "Mangos", "Banana"];
$food = ["Jalebi", "Burger"];
array_splice($fruits, count($fruits), 0, $food);

echo "<pre>";
print_r($fruits);
echo "</pre>";