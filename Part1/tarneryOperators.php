<?php
$age = 18;
// ($age>=18 && $age<=21) ? $age="You are eligible" : $age="You are not eligible";
// $age = ($age>=18 && $age<=21) ? "You are eligible" : "You are not eligible";
$age = "Sir, " . ($age >= 18 && $age <= 21 ? "You are eligible" : "You are not eligible");
echo $age;
