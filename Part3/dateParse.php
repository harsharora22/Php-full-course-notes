<?php
echo "<pre>";
print_r(date_parse("2006-02-11 12:00"));
echo "</pre>";
$date = date_parse("2006-02-11 12:00");
echo $date['day'];