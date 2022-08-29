<?php
include "config.php";
$input = file_get_contents('php://input');
$array = json_decode($input, true);
$fname = $array['fname'];
$class = $array['classes'];
$address = $array['address'];
$sql = "INSERT INTO data (name,address,class) VALUES('{$fname}','{$address},{$class})";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array('insert' => 'success'));
} else {
    echo json_encode(array('insert' => 'error'));
}