<?php
$emp = [
    [1, "Harsh arora", "Web developer", 50000],
    [2, "Ram", "App developer", 40000],
    [3, "Sham", "Software developer", 20000],
];
echo "<table border='2px' cellpadding='10px' cellspacing='0'>";
echo "<tr>
      <th>Id</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Salary</th>
     </tr>";
foreach ($emp as list($id, $name, $designation, $salary)) {
    echo "<tr><td>$id.</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
}
echo "<table>";

// associative array
$marks = [
    [
        "Name" => "Harsh",
        "Science" => 98,
        "SST" => 96,
        "Computer" => 99,
    ],
    [
        "Name" => "Aman",
        "Science" => 88,
        "SST" => 83,
        "Computer" => 90,
    ],
    [
        "Name" => "Komal",
        "Science" => 89,
        "SST" => 81,
        "Computer" => 95,
    ],
    [
        "Name" => "Suma",
        "Science" => 90,
        "SST" => 77,
        "Computer" => 86,
    ],
];
echo "<table border='2px' cellpadding='10px' cellspacing='0'>";
echo "<tr>
      <th>Name</th>
      <th>Science</th>
      <th>SST</th>
      <th>Computer</th>
     </tr>";
foreach ($marks as list("Name" => $name, "Science" => $Science, "SST" => $SST, "Computer" => $Computer)) {
    echo "<tr>
          <td>$name</td>
          <td>$Science</td>
          <td>$SST</td>
          <td>$Computer</td>
        </tr>";
}
echo "<table>";