<?php
class student
{
    private $first_name;
    private $last_name;
    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __sleep()
    {
        return array('first_name', 'last_name');
    }
    public function __wakeup()
    {
        return "This is wake up method";
    }

}
$obj = new student();
$obj->setName("Harsh", "Arora");
$srl = serialize($obj);
$us = unserialize($srl);
echo "<pre>";
print_r($us);
echo "</pre>";
