<?php
$str = "    This can be trim";
// echo trim($str);
// echo rtrim($str, "m");
// echo ltrim($str, "m");
echo chop($str, "m");