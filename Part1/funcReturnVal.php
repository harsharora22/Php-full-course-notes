<?php
function name($fname, $lname)
{
    $name = "$fname $lname";
    return $name;
}
$val = name("Harsh", "arora");
echo $val;

?>
<?php
echo "<br>";
// function arguments by reference
function testing(&$string)
{
    $string .= "adding something extra";
}
$str = "This is a string ";
testing($str);
echo $str;
echo "<br>";

function sum($num)
{
    $num += 5;
}
function sum2(&$num)
{
    $num += 5;
}
$number = 10;
sum($number);
echo "The Original value is $number <br>";
sum2($number);
echo "The Original value is $number";