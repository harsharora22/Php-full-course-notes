<?php
class abc
{
    private $first_name;
    private $last_name;
    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __unset($property)
    {
        unset($this->$property);
    }

}
$test = new abc();
$test->setName("Harsh", "Arora");
unset($test->first_name);
echo "<pre>";
print_r($test);
echo "</pre>";
