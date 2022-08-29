<?php
$food = ["Jalebi", "Pizza", "a" => "Burger"];
$fruits = ["a" => "Apple", 1 => "Papita"];
$new_array = array_replace($food, $fruits);
echo "<pre>";
print_r($new_array);
echo "</pre>";