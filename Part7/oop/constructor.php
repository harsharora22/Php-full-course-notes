<?php
class person
{
    public $name, $age;
    public function __construct($n = "No name", $a = 'No age')
    {
        $this->name = $n;
        $this->age = $a;
    }
    public function show()
    {
        echo "Name: " . $this->name . " - Age: " . $this->age;
    }
}
$p1 = new person("Harsh", 16);
$p1->show();