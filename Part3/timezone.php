<?php
date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get();
$tz = timezone_open("Asia/Kolkata");
echo timezone_name_get($tz);
echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";
echo "<pre>";
print_r(timezone_identifiers_list(16));
echo "</pre>";