<?php
$marks = [
    "Harshpreet Singh" => [
        "Science" => 98,
        "SST" => 96,
        "Computer" => 99,
    ],
    "Aman" => [
        "Science" => 88,
        "SST" => 83,
        "Computer" => 90,
    ],
    "Komal" => [
        "Science" => 89,
        "SST" => 81,
        "Computer" => 95,
    ],
];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
          <th>Name</th>
          <th>Science</th>
          <th>SST</th>
          <th>Computer</th>
        </tr>";
foreach ($marks as $Key => $value) {
    echo "<tr>
        <td>$Key</td>";
    foreach ($value as $innerval) {
        echo "<td>$innerval</td>";
    }
    echo "</tr>";
}
echo "<table>";

// echo "<pre>";
// print_r($marks);
// echo "</pre>";