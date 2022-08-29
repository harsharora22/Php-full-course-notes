<?php
// echo date("d-m-Y",strtotime("now"))."<br>";
// echo date("d-m-Y H:m",strtotime("3 april 2006"))."<br>";
// echo date("d-m-Y H:m",strtotime("+5 hours"))."<br>";
// echo date("d-m-Y H:m",strtotime("+5 week"))."<br>";

// echo strftime("%B %d %Y,%X %Z")."<br>";
// echo gmstrftime("%B %d %Y,%X %Z")."<br>";

// datetimeset func
$date = date_create("2015-05-15");
date_time_set($date, 3, 5);
echo date_format($date, "d-m-Y H:i:s")

?>