<?php
$var = "bete 122@gmail.net//";
$var = filter_var($var, FILTER_SANITIZE_EMAIL);
if (filter_var($var, FILTER_VALIDATE_EMAIL)) {
    echo "$var is a valid email";
} else {
    echo "$var is not a valid email";
}
// $var = "https://google .com";
// $var = filter_var($var, FILTER_SANITIZE_URL);  // only remove spaces
// if (filter_var($var, FILTER_VALIDATE_URL)) {
//     echo "$var is a valid URL";
// } else {
//     echo "$var is not a valid URL";
// }
// $var = "eee20.22///";
// $var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);
// if (filter_var($var,FILTER_VALIDATE_INT)) {
//     echo "$var is a valid Int";
// } else {
//     echo "$var is not a valid Int";
// }
// $var = "eee20.2,2///";
// $var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND); //FILTER_FLAG_ALLOW_FRACTION
// if (filter_var($var,FILTER_VALIDATE_FLOAT)) {
//     echo "$var is a valid Int";
// } else {
//     echo "$var is not a valid Int";
// }

// $var = "Harsh's";
// echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES); #or echo addslashes($var);

$var = "<h1>Harsh&</h1>";
// echo filter_var($var, FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_AMP);  // remove the HTML tags , FILTER_FLAG_STRIP_HIGH
// echo filter_var($var, FILTER_SANITIZE_ENCODED);
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);