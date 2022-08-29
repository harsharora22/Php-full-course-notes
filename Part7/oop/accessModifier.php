<?php
class base
{
    protected $name;
    public function __construct($n)
    {
        $this->name = $n;
    }
    protected function show()
    {
        echo "Name is: " . $this->name;
    }
}
class derived extends base
{
    public function get()
    {
        echo "Name is: " . $this->name;
    }
}

$test = new derived("Harsh");
$test->get();