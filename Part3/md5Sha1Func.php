<?php
$str = "Harsh arora";
// echo "md5 Binary:".md5($str,true)."<br>";
// echo "md5 Hex:".md5($str)."<br>";
// echo "sha1 Binary:".sha1($str,true)."<br>";
// echo "sha1 Hex:".sha1($str);

if (md5($str) == "762700b36aacfd51f36e3c47c9623a3d") {
    echo "Password Matched";
} else {
    echo "Password Doesn't Matched";
}