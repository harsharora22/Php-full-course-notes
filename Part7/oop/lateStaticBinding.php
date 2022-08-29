<?php
class base
{
    protected static $name = "Harsh";

    public static function show()
    {
        echo static::$name;
    }
}
class derived extends base
{
    protected static $name = "Preet";
}
$test = new derived();
$test->show();