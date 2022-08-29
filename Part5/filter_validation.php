<?php
// $var = 101;
// var_dump(filter_var($var, FILTER_VALIDATE_INT)); // This function not return integer in case of 0
// if (filter_var($var, FILTER_VALIDATE_INT) || filter_var($var, FILTER_VALIDATE_INT) == 0) {
//     echo "0 is int";
// } else {
//     echo "0 is not an int";
// }

// $var = 1234567890;
// var_dump(filter_var($var, FILTER_VALIDATE_INT));
// $options = ["options" =>
//     ["min_range" => 0,
//         "max_range" => 9999999999]];
// if (filter_var($var, FILTER_VALIDATE_INT, $options)) {
//     echo "Validation success";
// } else {
//     echo "It must be more than 8 charcters";
// }

// $var = 8;
// var_dump(filter_var($var, FILTER_VALIDATE_FLOAT));
// $options = ["options" =>
//     ["min_range" => 8,
//         "max_range" => 100]];
// if (filter_var($var, FILTER_VALIDATE_FLOAT, $options)) {
//     echo "$var is float";
// } else {
//     echo "$var is not a float";
// }

// $var = "bete";
// var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE));
// if (filter_var($var, FILTER_VALIDATE_BOOLEAN)) {
//     echo "$var is boolean";
// } else {
//     echo "$var is not a boolean";
// }

// $var = "bete1@gmail.net";
// var_dump(filter_var($var, FILTER_VALIDATE_EMAIL));
// if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
//     echo "$var is a valid email";
// } else {
//     echo "$var is not a valid email";
// }

// $var = "http://www.bete.com/index.php?a=2";
// var_dump(filter_var($var, FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED));
// if (filter_var($var, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)) { // FILTER_FLAG_PATH_REQUIRED
//     echo "$var is a valid url";
// } else {
//     echo "$var is not a valid url";
// }

// $var = "192.168.1.1";
// var_dump(filter_var($var, FILTER_VALIDATE_IP));
// if (filter_var($var, FILTER_VALIDATE_IP)) {
//     echo "$var is a valid IP";
// } else {
//     echo "$var is not a valid IP";
// }

// $var = "FA-F9-DD-B2-5E-0D";
// // var_dump(filter_var($var, FILTER_VALIDATE_MAC));
// if (filter_var($var, FILTER_VALIDATE_MAC)) { // media access control address
//     echo "$var is a valid MAC";
// } else {
//     echo "$var is not a valid MAC";
// }