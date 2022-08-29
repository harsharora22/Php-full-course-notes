<?php
class student
{
    public $name;
    public $course;
    public function __construct($n)
    {
        $this->name = $n;
    }
    public function setCourse(course $c)
    {
        $this->course = $c;
    }
}
class course
{
    public $cname;
    public function __construct($c)
    {
        $this->cname = $c;
    }
}
$st1 = new student("Harsh");
$c1 = new course("Php");
$st1->setCourse;
$st2 = clone $st1;
$st2->name = "Preet";
echo $st1->name;