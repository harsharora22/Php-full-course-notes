<?php
$str = "Hy I am Harsh";
$encodeStr = convert_uuencode($str);
echo $encodeStr;
$decodeStr = convert_uudecode($encodeStr);
echo $decodeStr;