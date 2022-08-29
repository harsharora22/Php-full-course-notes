<?php
class abc
{
    private $name;
    public function __get($property)
    {
        echo "You are trying to access Non Existing or Private Property($property)";
    }
}
$test = new abc();
$test->name;
