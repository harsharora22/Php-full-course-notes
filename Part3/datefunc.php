<?php
echo "Today is " . date("d") . "<br>";
echo "Today is " . date("jS") . "<br>"; // it will not add 0 between 1 to 9
echo "Month is " . date("F") . "<br>";
echo "Month is " . date("m") . "<br>";
echo "Month is " . date("n") . "<br>";
echo "Month is " . date("M") . "<br>";
echo "Year is " . date("Y") . "<br>";
echo "Year is " . date("y") . "<br>";
echo "Week day is " . date("D") . "<br>";
echo "Week day is " . date("l") . "<br>";
echo "Week day is " . date("N") . "<br>"; // it has 7 days in week
echo "Week day is " . date("w") . "<br>"; // it start from 0-sun
echo "Full date is " . date("j/m/Y") . "<br>";
echo "Total present day is " . date("z") . "<br>";
echo "Present week of year is " . date("W") . "<br>";
echo "Days of the month " . date("t") . "<br>";
echo "Is this year is Leap year " . date("t") . "<br>"; // leap year means 366 days in year