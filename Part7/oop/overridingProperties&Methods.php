<?php
class base
{
    public $name = "Harsh";
    public function calc($a, $b)
    {
        return $a * $b;
    }
}
class derived extends base
{
    public $name = "Preet";
    // public function calc($a, $b)
    // {
    //     return $a + $b;
    // }
}
$test = new derived();
echo $test->calc(10, 10);