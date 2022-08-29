<?php
$arr = array(
    "name" => "Harsh",
    "age" => 18,
    "email" => "harsh@gmail.com",
);
$filters = array(
    "name" => array(
        "filter" => FILTER_SANITIZE_STRING,
        "flags" => FILTER_FLAG_STRIP_HIGH,
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => [
            "min_range" => 18,
            "max_range" => 21,
        ],
    ),
    "email" => FILTER_SANITIZE_EMAIL,
);
echo "<pre>";
print_r(filter_var_array($arr, $filters));
echo "</pre>";
