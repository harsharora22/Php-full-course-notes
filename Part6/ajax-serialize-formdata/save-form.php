<?php
$conn = mysqli_connect("localhost", "root", "", "student") or die("Connection Failed");
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$sql = "INSERT INTO users (name,age,gender,city) VALUES ('{$name}',{$age},'{$gender}','{$city}')";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
if ($result) {
    echo "Hello {$name} your record is saved";
} else {
    echo "Cann't save your data";
}