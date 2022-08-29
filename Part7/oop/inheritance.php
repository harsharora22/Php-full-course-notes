<?php
class employee
{
    public $name;
    public $age;
    public $salary;
    public function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    public function show()
    {
        echo "<h1>Employee Details</h1>";
        echo $this->name . "-" . $this->age . "-" . $this->salary;
    }
}
class manager extends employee
{
    public $phone = 233948466;
    public function show()
    {
        echo "<h1>Manager Details</h1>";
        echo $this->name . "-" . $this->age . "-" . $this->salary . "-" . $this->phone;
    }
}
$e1 = new manager("Harsh", 16, 50000);
$e2 = new employee("Manu", 16, 30000);
$e1->show();
$e2->show();