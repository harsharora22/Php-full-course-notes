<?php
if ($_POST['fname'] && $_POST['lname']) {
    if (file_exists("form-data.json")) {
        $current_data = file_get_contents("form-data.json");
        $arr_data = json_decode($current_data, true);
        $new_data = [
            "fname" => $_POST['fname'],
            "lname" => $_POST['lname'],
        ];
        $arr_data[] = $new_data;
        $json_data = json_encode($arr_data, JSON_PRETTY_PRINT);
        if (file_put_contents("form-data.json", $json_data)) {
            echo "success";
        } else {
            echo "Failed.";
        }
    } else {
        echo "file not found.";
    }
} else {
    echo "Please fill all these feilds";
}