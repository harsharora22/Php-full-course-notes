<?php
include 'database.php';
$obj = new database();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$values = ["fname" => $fname, "lname" => $lname];
if ($obj->insert("users", $values)) {
    echo "<h2>Data inserted Successfully</h2>";
} else {
    echo "<h2>Data is not inserted Successfully</h2>";
}