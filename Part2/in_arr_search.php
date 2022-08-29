<?php
$food = ["Jalebi", "Pizza", "Burger"];
if (in_array("Pizza", $food, true)) {
    echo "Find Successfully.";
} else {
    "Cannot find.";
}
echo array_search("Burger", $food);

$marks =
    [
    "Name" => "Harsh",
    "Science" => 98,
    "SST" => 96,
    "Computer" => 99,
];

echo array_search("Harsh", $marks);