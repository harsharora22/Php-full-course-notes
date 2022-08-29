<?php
$colors = [
    "red",
    "blue",
    "violet",
];
foreach ($colors as $value) {
    echo $value . "<br>";
}

// associative array
$colors = [
    1 => "red",
    2 => "blue",
    3 => "violet",
];
echo "<ul>";
foreach ($colors as $key => $value) {
    echo "<li>$key = $value <br></li>";
}
echo "</ul>";