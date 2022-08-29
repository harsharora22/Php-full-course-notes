<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['sid'];
include 'config.php';
$sql = "DELETE FROM users WHERE id={$id}";

if (mysqli_query($conn, $sql)) {
    echo (json_encode([
        'message' => 'Record Deleted',
        'status' => true,
    ]));
} else {
    echo (json_encode([
        'message' => 'No record found.',
        'status' => false,
    ]));
}