<?php
echo "<pre>";
print_r(getdate());
echo "</pre>";
$date = getdate();
echo $date['month'] . "-" . $date["year"];

// echo "<pre>";
// print_r(gettimeofday());
// echo "</pre>";
// echo gettimeofday(true);

// echo "<pre>";
// print_r(localtime(time(), true));
// echo "</pre>";