<?php
// echo checkdate(5, 3, 2006);
$date1 = date_create(2006 - 01 - 26);
$date2 = date_create(2006 - 02 - 11);
$diff = date_diff($date1, $date2);
// echo $diff->days;
echo $diff->format("%r%a");
echo "<pre>";
print_r($diff);
echo "</pre>";