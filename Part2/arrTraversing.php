<?php
$food = ["Jalebi", "Pizza", "Burger", "Samosa"];
echo "<b>Current : </b>" . current($food) . "<br>";
echo "<b>Key : </b>" . key($food) . "<br>";
echo "<b>Position : </b>" . pos($food) . "<br>";
next($food);
next($food);
echo "<b>Current : </b>" . current($food) . "<br>";
prev($food);
echo "<b>Current : </b>" . current($food) . "<br>";
end($food);
echo "<b>Current : </b>" . current($food) . "<br>";
echo "<b>Key : </b>" . key($food) . "<br>";

// echo "<pre>";
// print_r(each($food));
// echo "</pre>";
echo "<b>Current : </b>" . reset($food) . "<br>";