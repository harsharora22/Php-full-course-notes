<?php
echo "Hour is " . date("h") . "<br>";
echo "Hour is " . date("H") . "<br>"; // 24 format
echo "Hour is " . date("g") . "<br>";
echo "Hour is " . date("G") . "<br>"; // remove 0 form start
echo "Min is " . date("i") . "<br>";
echo "Sec is " . date("s") . "<br>";
echo "Meridiem is " . date("a") . "<br>";
echo "Meridiem is " . date("A") . "<br>";

date_default_timezone_set("Asia/Kolkata");
echo "Time is " . date("d/m/Y h:i:s a") . "<br>";