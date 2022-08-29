<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['sid'];
$fname = $data['sfname'];
$lname = $data['slname'];
include 'config.php';
$sql = "UPDATE users SET fname='{$fname}', lname='{$lname}' WHERE id={$id}";
if (mysqli_query($conn, $sql)) {
    echo (json_encode([
        'message' => 'Record Updated.',
        'status' => true,
    ]));
} else {
    echo (json_encode([
        'message' => 'No record found.',
        'status' => false,
    ]));
}