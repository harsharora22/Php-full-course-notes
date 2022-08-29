<?php
// echo "Time is ".date("d/m/Y h:i:s a")."<br>";
// echo date("d-m-Y h:i:s a",mktime(1,48,45,7,12,2006));

// date create format
$date = date_create("2006-02-11", timezone_open("Asia/Kolkata"));
echo date_format($date, "d/m/Y/l h:i:a");