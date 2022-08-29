<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);
$fname = $data['sfname'];
$lname = $data['slname'];
include 'config.php';
$sql = "INSERT INTO users (fname,lname) VALUES ('{$fname}','{$lname}')";
if (mysqli_query($conn, $sql)) {
    echo (json_encode([
        'message' => 'Record Inserted.',
        'status' => true,
    ]));
} else {
    echo (json_encode([
        'message' => 'No record found.',
        'status' => false,
    ]));
}