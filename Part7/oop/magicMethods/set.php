<?php
class abc
{
    private $name;
    public function show()
    {
        echo $this->name;
    }
    public function __get($property)
    {
        echo "You are trying to access Non Existing or Private Property($property)";
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "Cann't find this property = $property";
        }
    }
}
$test = new abc();
$test->name = "Harsh";
$test->show();
