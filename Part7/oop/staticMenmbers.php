<?php
class base
{
    public static $name = "Harsh";

    // public function __construct($n)
    // {
    //     self::$name = $n;
    //     self::show();
    // }
}
class derived extends base
{
    public static function show()
    {
        echo parent::$name;
    }
}
$test = new derived();
$test->show();
// echo base::$name;